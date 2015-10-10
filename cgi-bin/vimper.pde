import peasy.*;
import peasy.org.apache.commons.math.*;
import peasy.org.apache.commons.math.geometry.*;
import peasy.test.*;

import controlP5.*;

PShader toon;

float base_rotation = PI/4;
float arm1_rot = PI/2;
float arm2_rot = PI/6;

//Global set sides
int sides = 30;
int armrad = 8;
int arm1 = 100;
int arm2 = 80;
int baserad = 40;
int baseoff = 50;
int elboff = 20;
int effLen = 15;

int off = baseoff + elboff;

ControlP5 base_rot;
PeasyCam cam;
float scroll = 100;
PGraphics controls;

void setup() {
	size(600,600, OPENGL);
	lights();

	//Peasycam
	cam = new PeasyCam(this,0, 0,0, 300);
	cam.setMinimumDistance(100);
	cam.setMaximumDistance(1000);

	//Controls
	base_rot = new ControlP5(this);
	base_rot.setAutoDraw(false);
	base_rot.addSlider("base_rotation")
		.setPosition(40,40)
		.setSize(100,20)
		.setRange(-100,100)
		.setValue(0)
		.setColorCaptionLabel(color(153));
	//Uncomment to remove edges
	//noStroke();
	//ortho();
}

void draw() {
	//shader(toon);
	fill(#3BD3FF);
	//This is a single tree of primitives. All transformations apply to any figure
	//drawn from then on. 
	//stroke(0);
	//translate(width/2, height/2, 300);
	background(0);
	
	//This indentation is only to clarify the hierachy of the 
	//transformations. Each of them is relative to the previous one. 
	//Transformation sequence is from left to right.
	rotate(-base_rotation);
		base();
		rotateY(PI - arm2_rot);
		translate(0, baseoff, 0);
			arm_one();
			translate(arm1, 0,0);
			rotateY(PI/2 - arm2_rot);
				arm_two();
				translate(arm2, off, 0);
				rotateY(-PI/4 + arm2_rot-arm1_rot);
				endEff();
	base_rot.draw();
}	

//TODO: Cone is created independent of the order of s1 and s2
//Fixes the problem of extra face being created when r1 > r2
//Not a complete solution.
void cylinder(int sides, float s1, float s2, float h) {
	float r1 = min(s1, s2);
	float r2 = max(s1, s2);
	float angle = 360/sides;
	beginShape();
	for (int i = 0; i < sides; i++) {
		float x = cos(radians(i * angle)) * r1 * scroll/100;
		float y = cos(radians(i * angle)) * r1 * scroll/100;
		vertex(0, x, y);
	}
	endShape();
	
	beginShape();
	for (int i = 0; i < sides; i++) {
		float x = cos(radians(i * angle)) * r2 * scroll/100;
		float y = cos(radians(i * angle)) * r2 * scroll/100;
		vertex(h * scroll/100, x, y);
	}
	endShape();

	beginShape(TRIANGLE_STRIP);
	for (int i = 0; i < sides + 1; i++) {
		float x1 = cos(radians(i * angle)) * r1 * scroll/100;
		float y1 = sin(radians(i * angle)) * r1 * scroll/100;
		float x2 = cos(radians(i * angle)) * r1 * scroll/100;
		float y2 = sin(radians(i * angle)) * r1 * scroll/100;
		vertex(0, x1, y1);
		vertex(h * scroll/100, x2, y2);
	}
	endShape(CLOSE);
}

void endEff() {
	cylinder(sides, 2,armrad, effLen);
}

void arm_two() {
	cylinder(sides, armrad, armrad, arm2);
}

void arm_one() {
	cylinder(sides, armrad, armrad, arm1);
}

void base() {
	sphere(baserad);
}

