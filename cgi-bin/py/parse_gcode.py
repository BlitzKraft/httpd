#!/usr/bin/python

import string
import sys, getopt

file = sys.argv[1]
linecount = 0
print 'Selected file:',file
fo = open(file)

val = [0,0,0]

humanOut = True
humanOutString = ''
for line in fo:
    line = line.replace(';', '')
    if line.strip(): linecount += 1
    for gcode in line.split(' '):
        if gcode[0].upper() == 'G':
            humanOutString+='Move '
            if int(gcode[1]) == 0:
                humanOutString+= 'fast'
            else:
                humanOutString+= 'slow'
            humanOutString += ' ' + str(line[2:])
        elif gcode[0].upper() =='X':
            val[0] = int(gcode[1:]) 
        elif gcode[0].upper() =='Y':
            val[1] = int(gcode[1:]) 
        elif gcode[0].upper() =='Z':
            val[2] = int(gcode[1:]) 


if humanOut: print humanOutString

fo.close()
print 'Lines: ',linecount
