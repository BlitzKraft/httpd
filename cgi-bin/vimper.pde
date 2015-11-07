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

int off = baseoff + elboff;

int effLen = 15;

float scroll = 100;
float xOff, yOff;
float rotx, roty;
float protx, proty;

color bgcolor;

void setup() {
  size(900,600, OPENGL);
  background(#222222);
  lights();
  camera(700.0, 350.0, 500.0, 0.0, 0.0, 0.0, 0.0, 0.0, 1.0);
  //Uncomment to remove edges
  //noStroke();
  //ortho();
}

void setbg(color col) {
	//col = color(col);
	background(col);
	bgcolor =col;
}
void draw() {
  //shader(toon);
  //fill(#3BD3FF);
  stroke(#BBBBBB);
  //stroke(#3BD3FF);
  fill(0);
  //stroke(#3BD3FF);

  //This is a single tree of primitives. All transformations apply to any figure
  //drawn from then on. 
  //stroke(0);
  translate(width/2, height/2, 300);
  //rotateY(map(mouseX, 0, width, 0, TWO_PI));
  //rotateY(map(mouseX, 0, width, 0, TWO_PI));
  //float xrot = map(mouseX, 0, height, TWO_PI, 0);
  //float yrot = map(mouseY, 0, height, TWO_PI, 0);
  rotateY(roty);
  rotateX(rotx);
  background(bgcolor);
  //background(#00B0F0);
  //rotateY(-PI/2);
  //rotateX(-PI/2);

  rotate(-base_rotation);
    //base();
    rotateY(PI - arm2_rot);
    translate(0, baseoff, 0);
      arm_one();
      translate(arm1, 0,0);
      rotateY(PI/2 - arm2_rot);
        arm_two();
        translate(arm2, off, 0);
        rotateY(-PI/4 + arm2_rot-arm1_rot);
        endEff();
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

/*
void mouseWheel(MouseEvent event) {
  float scrollAmount = event.getAmount();
  scroll += scrollAmount;
}
*/

void endEff() {
  cylinder(sides, armrad, 0, effLen);
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

void mousePressed() {
  xOff = map(mouseX, 0, width, TWO_PI,0) - rotx;
  yOff = map(mouseY, 0, height, TWO_PI,0) - roty;
}

void mouseDragged() {
  rotx = map(mouseX, 0, height, TWO_PI, 0)  - xOff;
  roty = map(mouseY, 0, height, TWO_PI, 0)  - yOff;
}
