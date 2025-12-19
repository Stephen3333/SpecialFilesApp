<?php


// In Modelling & Simulation, Modelling is the process of representing a model which includes its construction and working. This model is similar to a real system, which helps the analyst predict the effect of changes to the system. Simulation of a system is the operation of a model in terms of time or space, which helps analyze the performance of an existing or a proposed system. In this tutorial, we will discuss the concept and classification of Modelling & Simulation, their architecture, application areas, and other key ideas.
// Audience This tutorial is designed for all those readers pursing either Bachelors or Masters degree in Computer Science. It will help them understand the basic concepts related to Modelling & Simulation.
// Prerequisites In this tutorial, all the topics have been explained at the elementary level. Therefore, a beginner can easily understand this tutorial. However, if readers have a prior knowledge of computer architecture in general, it will be quite easy to grasp the concepts explained here.

$A = 87;
$B = 86;
$C = 85;
$D = 84;
$E = 83;
$F = 82;
$G = 81;
$H = 80;
$I = 79;
$J = 78;
$K = 77;
$L = 76;
$M = 75;
$N = 74;
$O = 73;
$P = 72;
$Q = 71;
$R = 70;
$S = 69;
$T = 68;
$U = 67;
$V = 66;
$W = 65;
$X = 64;
$Y = 63;
$Z = 62;

$DistrictA = 87;
$DistrictB = 86;
$DistrictC = 85;
$DistrictD = 84;
$DistrictE = 83;
$DistrictF = 82;
$DistrictG = 81;
$DistrictH = 80;
$DistrictI = 79;
$DistrictJ = 78;
$DistrictK = 77;
$DistrictL = 76;
$DistrictM = 75;
$DistrictN = 74;
$DistrictO = 73;
$DistrictP = 72;
$DistrictQ = 71;
$DistrictR = 70;
$DistrictS = 69;
$DistrictT = 68;
$DistrictU = 67;
$DistrictV = 66;
$DistrictW = 65;
$DistrictX = 64;
$DistrictY = 63;
$DistrictZ = 62;

$ProvincialA = 174;
$ProvincialB = 172;
$ProvincialC = 170;
$ProvincialD = 168;
$ProvincialE = 166;
$ProvincialF = 164;
$ProvincialG = 162;
$ProvincialH = 160;
$ProvincialI = 158;
$ProvincialJ = 156;
$ProvincialK = 154;
$ProvincialL = 152;
$ProvincialM = 150;
$ProvincialN = 148;
$ProvincialO = 146;
$ProvincialP = 144;
$ProvincialQ = 142;
$ProvincialR = 140;
$ProvincialS = 138;
$ProvincialT = 136;
$ProvincialU = 134;
$ProvincialV = 132;
$ProvincialW = 130;
$ProvincialX = 128;
$ProvincialY = 126;
$ProvincialZ = 124;

$NationalA = 261;
$NationalB = 258;
$NationalC = 255;
$NationalD = 252;
$NationalE = 249;
$NationalF = 246;
$NationalG = 243;
$NationalH = 240;
$NationalI = 237;
$NationalJ = 234;
$NationalK = 231;
$NationalL = 228;
$NationalM = 225;
$NationalN = 222;
$NationalO = 219;
$NationalP = 216;
$NationalQ = 213;
$NationalR = 210;
$NationalS = 207;
$NationalT = 204;
$NationalU = 201;
$NationalV = 198;
$NationalW = 195;
$NationalX = 192;
$NationalY = 189;
$NationalZ = 186;


$InternationalA = 348;
$InternationalB = 344;
$InternationalC = 340;
$InternationalD = 336;
$InternationalE = 332;
$InternationalF = 328;
$InternationalG = 324;
$InternationalH = 320;
$InternationalI = 316;
$InternationalJ = 312;
$InternationalK = 308;
$InternationalL = 304;
$InternationalM = 300;
$InternationalN = 296;
$InternationalO = 292;
$InternationalP = 288;
$InternationalQ = 284;
$InternationalR = 280;
$InternationalS = 276;
$InternationalT = 272;
$InternationalU = 268;
$InternationalV = 264;
$InternationalW = 260;
$InternationalX = 256;
$InternationalY = 252;
$InternationalZ = 248;


$ModelingAndSimulationTutorial = $M+$O+$D+$E+$L+$I+$N+$G+$A+$N+$D+$S+$I+$M+$U+$L+$A+$T+$I+$O+$N+$T+$U+
                $T+$O+$R+$I+$A+$L;

$ModellingAndSimulationTutorialDef = $I+$N+$M+$O+$D+$E+$L+$L+$I+$N+$G+$A+$N+$D+$S+$I+$M+$U+$L+$A+$T+$I+
                $O+$N+$M+$O+$D+$E+$L+$L+$I+$N+$G+$I+$S+$T+$H+$E+$P+$R+$O+$C+$E+$S+$S+$O+$F+$R+$E+$P+$R+
                $E+$S+$E+$N+$T+$I+$N+$G+$A+$M+$O+$D+$E+$L+$W+$H+$I+$C+$H+$I+$N+$C+$L+$U+$D+$E+$S+$I+$T+
                $S+$C+$O+$N+$S+$T+$R+$U+$C+$T+$I+$O+$N+$A+$N+$D+$W+$O+$R+$K+$I+$N+$G+$T+$H+$I+$S+$M+$O+
                $D+$E+$L+$I+$S+$S+$I+$M+$I+$L+$A+$R+$T+$O+$A+$R+$E+$A+$L+$S+$Y+$S+$T+$E+$M+$W+$H+$I+$C+
                $H+$H+$E+$L+$P+$S+$T+$H+$E+$A+$N+$A+$L+$Y+$S+$T+$P+$R+$E+$D+$I+$C+$T+$T+$H+$E+$E+$F+$F+
                $E+$C+$T+$O+$F+$C+$H+$A+$N+$G+$E+$S+$T+$O+$T+$H+$E+$S+$Y+$S+$T+$E+$M+$S+$I+$M+$U+$L+$A+
                $T+$I+$O+$N+$O+$F+$A+$S+$Y+$S+$T+$E+$M+$I+$S+$T+$H+$E+$O+$P+$E+$R+$A+$T+$I+$O+$N+$O+$F+
                $A+$M+$O+$D+$E+$L+$I+$N+$T+$E+$R+$M+$S+$O+$F+$T+$I+$M+$E+$O+$R+$S+$P+$A+$C+$E+$W+$H+$I+
                $C+$H+$H+$E+$L+$P+$S+$A+$N+$A+$L+$Y+$Z+$E+$T+$H+$E+$P+$E+$R+$F+$O+$R+$M+$A+$N+$C+$E+$O+
                $F+$A+$N+$E+$X+$I+$S+$T+$I+$N+$G+$O+$R+$A+$P+$R+$O+$P+$O+$S+$E+$D+$S+$Y+$S+$T+$E+$M+$I+
                $N+$T+$H+$I+$S+$T+$U+$T+$O+$R+$I+$A+$L+$W+$E+$W+$I+$L+$L+$D+$I+$S+$C+$U+$S+$S+$T+$H+$E+
                $C+$O+$N+$C+$E+$P+$T+$A+$N+$D+$C+$L+$A+$S+$S+$I+$F+$I+$C+$A+$T+$I+$O+$N+$O+$F+$M+$O+$D+
                $E+$L+$L+$I+$N+$G+$A+$N+$D+$S+$I+$M+$U+$L+$A+$T+$I+$O+$N+$T+$H+$E+$I+$R+$A+$R+$C+$H+$I+
                $T+$E+$C+$T+$U+$R+$E+$A+$P+$P+$L+$I+$C+$A+$T+$I+$O+$N+$A+$R+$E+$A+$S+$A+$N+$D+$O+$T+$H+
                $E+$R+$K+$E+$Y+$I+$D+$E+$A+$S;
$Audience = $A+$U+$D+$I+$E+$N+$C+$E+$T+$H+$I+$S+$T+$U+$T+$O+$R+$I+$A+$L+$I+$S+$D+$E+$S+$I+$G+$N+$E+$D+
                $F+$O+$R+$A+$L+$L+$T+$H+$O+$S+$E+$R+$E+$A+$D+$E+$R+$S+$P+$U+$R+$S+$I+$N+$G+$E+$I+$T+$H+
                $E+$R+$B+$A+$C+$H+$E+$L+$O+$R+$S+$O+$R+$M+$A+$S+$T+$E+$R+$S+$D+$E+$G+$R+$E+$E+$I+$N+$C+
                $O+$M+$P+$U+$T+$E+$R+$S+$C+$I+$E+$N+$C+$E+$I+$T+$W+$I+$L+$L+$H+$E+$L+$P+$T+$H+$E+$M+$U+
                $N+$D+$E+$R+$S+$T+$A+$N+$D+$T+$H+$E+$B+$A+$S+$I+$C+$C+$O+$N+$C+$E+$P+$T+$S+$R+$E+$L+$A+
                $T+$E+$D+$T+$O+$M+$O+$D+$E+$L+$L+$I+$N+$G+$A+$N+$D+$S+$I+$M+$U+$L+$A+$T+$I+$O+$N;
$Prerequisites = $P+$R+$E+$R+$E+$Q+$U+$I+$S+$I+$T+$E+$S+$I+$N+$T+$H+$I+$S+$T+$U+$T+$O+$R+$I+$A+$L+$A+$L+
                $L+$T+$H+$E+$T+$O+$P+$I+$C+$S+$H+$A+$V+$E+$B+$E+$E+$N+$E+$X+$P+$L+$A+$I+$N+$E+$D+$A+$T+
                $T+$H+$E+$E+$L+$E+$M+$E+$N+$T+$A+$R+$Y+$L+$E+$V+$E+$L+$T+$H+$E+$R+$E+$F+$O+$R+$E+$A+$B+
                $E+$G+$I+$N+$N+$E+$R+$C+$A+$N+$E+$A+$S+$I+$L+$Y+$U+$N+$D+$E+$R+$S+$T+$A+$N+$D+$T+$H+$I+
                $S+$T+$U+$T+$O+$R+$I+$A+$L+$H+$O+$W+$E+$V+$E+$R+$I+$F+$R+$E+$A+$D+$E+$R+$S+$H+$A+$V+$E+
                $A+$P+$R+$I+$O+$R+$K+$N+$O+$W+$L+$E+$D+$G+$E+$O+$F+$C+$O+$M+$P+$U+$T+$E+$R+$A+$R+$C+$H+
                $I+$T+$E+$C+$T+$U+$R+$E+$I+$N+$G+$E+$N+$E+$R+$A+$L+$I+$T+$W+$I+$L+$L+$B+$E+$Q+$U+$I+$T+
                $E+$E+$A+$S+$Y+$T+$O+$G+$R+$A+$S+$P+$T+$H+$E+$C+$O+$N+$C+$E+$P+$T+$S+$E+$X+$P+$L+$A+$I+
                $N+$E+$D+$H+$E+$R+$E;



$DistrictModelingAndSimulationTutorial = $ModelingAndSimulationTutorial;

$DistrictModellingAndSimulationTutorialDef = $ModellingAndSimulationTutorialDef + 
                $ModelingAndSimulationTutorial;
$DistrictAudience = $Audience + $ModelingAndSimulationTutorial;
$DistrictPrerequisites = $Prerequisites + $ModelingAndSimulationTutorial;

echo $DistrictPrerequisites;



?>