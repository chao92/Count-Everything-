<?php
ini_set('max_execution_time', 10);
ini_set ("display_errors", "1");
error_reporting(E_ALL);
require_once("java/Java.inc");
ini_set('memory_limit','512M');
$allId = [477974, 
		  477975, 471370, 456010, 477979, 472332, 472335, 469948, 453337, 460066, 472338, 
		  462229, 474951, 474950, 474957, 474955, 458451, 474958, 465160, 492070, 462511, 
		  462512, 469273, 462515, 469276, 455240, 492079, 467775, 452894, 452895, 468058, 
		  468054, 468052, 468051, 452899, 460608, 467756, 460602, 460603, 460601, 460606, 
		  460607, 467774, 489162, 458330, 489160, 489161, 489166, 479862, 458337, 489165, 
		  485139, 487499, 478896, 478897, 478893, 478891, 470576, 478898, 478899, 486804, 
		  465549, 486806, 486807, 486809, 454336, 454331, 454332, 458011, 483424, 488622, 
		  460065, 456799, 473319, 476146, 459956, 460262, 472596, 473310, 476140, 476141, 
		  473972, 470262, 467771, 483427, 478478, 457235, 488624, 478470, 472804, 472803, 
		  472802, 478477, 489787, 489784, 493074, 475962, 457231, 489788, 463009, 463008, 
		  461896, 461891, 461893, 476490, 466520, 491723, 491722, 461898, 461899, 491727, 
		  491726, 467490, 459319, 481349, 481346, 488568, 459316, 481345, 481342, 484263, 
		  484260, 459313, 465952, 465955, 465954, 465957, 473975, 483279, 493079, 483270, 
		  458806, 452472, 493323, 458802, 452476, 464609, 455248, 464604, 464605, 464602, 
		  462185, 464601, 481698, 457448, 492073, 488789, 457447, 481162, 481691, 484400, 
		  457441, 488781, 484407, 470663, 457445, 483182, 479256, 452780, 479254, 479252, 
		  479251, 452785, 480561, 483189, 479258, 487691, 487696, 487695, 479781, 479783, 
		  473968, 479784, 474318, 469875, 469872, 462353, 469870, 469871, 474310, 463058, 
		  474317, 474316, 477369, 483168, 478780, 485943, 478787, 472303, 477360, 477363, 
		  477364, 477367, 466701, 479430, 479435, 469507, 485947, 491503, 488468, 455074, 
		  491504, 459292, 469500, 482581, 482580, 453782, 453785, 453784, 453787, 455070, 
		  488833, 467808, 460859, 460858, 460857, 458025, 472880, 467801, 467800, 456604, 
		  466533, 456017, 487039, 482633, 482632, 462725, 462723, 453436, 453434, 489906, 
		  453438, 462729, 462728, 475046, 475042, 475043, 454947, 454944, 454075, 454940, 
		  475049, 471756, 471755, 471752, 471201, 478615, 471208, 471759, 465205, 456389, 
		  480983, 480980, 480987, 480986, 476962, 476963, 476964, 476968, 476969, 456724, 
		  458217, 486417, 460947, 455472, 491823, 472658, 485012, 460605, 476359, 458213, 
		  477570, 457509, 493252, 488836, 464130, 485133, 461076, 461077, 475434, 461073, 
		  475431, 475430, 458335, 475439, 475438, 493002, 493003, 468600, 484016, 468606, 
		  457205, 457206, 485136, 467597, 466866, 466867, 460475, 483868, 466863, 483865, 
		  482167, 483867, 462568, 466868, 457152, 483863, 482166, 492714, 469517, 471898, 
		  492711, 492710, 463928, 463929, 491535, 463924, 491537, 463922, 481717, 466732, 
		  491533, 457802, 457144, 457143, 457142, 457803, 459031, 485225, 457800, 486636, 
		  465527, 486633, 484945, 477569, 486630, 465186, 472845, 488611, 465180, 486638, 
		  473704, 488144, 466453, 465523, 459749, 486327, 489319, 453737, 489311, 481719, 
		  489315, 489317, 489316, 484671, 459875, 453732, 484677, 453733, 486330, 476696, 
		  460295, 476586, 460291, 490543, 486336, 472448, 460298, 463338, 467652, 472445, 
		  466476, 467344, 467592, 474145, 474147, 474140, 474141, 463783, 488958, 454786, 
		  467653, 454780, 492848, 454782, 477174, 492844, 477176, 472855, 477170, 492840, 
		  492842, 492188, 466210, 486468, 490629, 480281, 490626, 467025, 490624, 490620, 
		  485852, 485853, 482806, 458475, 482800, 482801, 485854, 485855, 485859, 482808, 
		  489300, 485679, 484095, 484097, 481576, 484091, 481570, 481573, 462290, 489687, 
		  481578, 462298, 454160, 467123, 467120, 467121, 467126, 490727, 490724, 454167, 
		  471160, 467128, 454444, 459862, 480778, 480779, 489686, 480775, 460495, 476775, 
		  473504, 476773, 476772, 455782, 455786, 455785, 486467, 459864, 484895, 484894, 
		  459865, 484890, 475238, 478648, 475235, 478314, 478316, 478642, 475232, 473743, 
		  471439, 476514, 471925, 471432, 471927, 471926, 471920, 471922, 473629, 473695, 
		  473697, 476510, 473745, 476512, 470347, 492044, 470030, 465746, 465747, 465741, 
		  465743, 465748, 471698, 491093, 466291, 491097, 466296, 452649, 452648, 452646, 
		  491099, 452644, 483043, 452642, 452641, 489297, 464837, 464831, 458259, 464833, 
		  486075, 464839, 464838, 487203, 487202, 479514, 461719, 473317, 461249, 483557, 
		  481910, 461712, 461711, 463089, 467754, 457929, 492180, 465409, 465408, 456793, 
		  452358, 455242, 457920, 457923, 466338, 457925, 457924, 465405, 452672, 491892, 
		  482618, 491896, 491895, 479181, 470561, 472768, 471543, 472274, 472276, 472277, 
		  483458, 456542, 452254, 483455, 455976, 452257, 486131, 483452, 486133, 478359, 
		  469078, 469079, 469076, 469074, 469075, 492273, 469070, 469071, 478479, 477996, 
		  477993, 477991, 460598, 460599, 460592, 460041, 460042, 460043, 460044, 460045, 
		  460046, 460595, 467753, 476600, 492018, 492019, 469212, 469213, 469210, 469211, 
		  469216, 462577, 462574, 469215, 460624, 468038, 486793, 460620, 486796, 486797, 
		  479180, 486799, 468032, 468035, 468034, 468037, 472829, 455296, 458041, 472904, 
		  458318, 482329, 456408, 489844, 482325, 485444, 482327, 485446, 456401, 482320, 
		  482323, 485114, 465612, 489785, 475595, 475596, 475849, 475598, 475847, 475845, 
		  476712, 475840, 486863, 477146, 486866, 486864, 465341, 476162, 488960, 488963, 
		  472903, 490494, 470384, 490495, 464047, 476499, 472861, 472865, 472867, 453467, 
		  473192, 491701, 466500, 491707, 473197, 491705, 490634, 463028, 464314, 464315, 
		  461877, 481369, 454315, 484799, 488239, 454312, 454310, 484240, 481361, 484242, 
		  484243, 488231, 484245, 481366, 484795, 483212, 483213, 455370, 452411, 452416, 
		  483217, 483214, 483215, 480091, 491725, 455378, 452419, 465977, 465975, 465974, 
		  470765, 476496, 476443, 458861, 458863, 476497, 460327, 467963, 481144, 457465, 
		  481146, 457467, 484420, 481141, 474081, 460321, 474083, 456626, 457468, 481149, 
		  474087, 474086, 478412, 477698, 460323, 478414, 477691, 477690, 477693, 477692, 
		  477694, 473736, 473737, 479233, 479235, 473733, 455198, 479236, 479239, 456621, 
		  455192, 470767, 473738, 474333, 474331, 474330, 474337, 459315, 474338, 469850, 
		  469851, 462372, 469853, 469854, 465302, 469859, 477349, 477348, 456036, 476440, 
		  456037, 486022, 481849, 470564, 489926, 472488, 456032, 472483, 472482, 488912, 
		  487808, 457087, 459736, 484937, 459732, 484933, 484930, 474642, 473366, 459739, 
		  467827, 467825, 467822, 492040, 482718, 484081, 467828, 480543, 480542, 480541, 
		  480231, 471591, 480545, 471593, 486479, 480548, 460835, 460834, 460836, 458438, 
		  458042, 487016, 487018, 465060, 462438, 489848, 483955, 462743, 462742, 462745, 
		  483486, 462749, 483485, 454968, 475062, 475063, 472479, 475065, 475066, 475067, 
		  476444, 454962, 479197, 454964, 454967, 471770, 471772, 454156, 486473, 470993, 
		  479199, 471778, 471779, 470839, 458040, 454153, 455310, 452976, 452971, 476901, 
		  476906, 458805, 466649, 465065, 466559, 455314, 465148, 466087, 466084, 463565, 
		  490759, 466080, 489196, 492043, 466089, 492485, 469684, 492480, 492483, 487522, 
		  486699, 469689, 469688, 455223, 452978, 475451, 475450, 461053, 461054, 475457, 
		  461509, 461058, 475458, 464024, 468375, 461502, 461500, 483846, 487714, 465218, 
		  483840, 468624, 468625, 457260, 468627, 468620, 493021, 483849, 468623, 470604, 
		  466886, 476691, 466884, 460450, 466883, 460455, 466881, 463908, 489088, 469539, 
		  469537, 489080, 463902, 469534, 463904, 463905, 492731, 469530, 457121, 457123, 
		  464058, 457124, 473722, 457128, 481864, 461078, 486651, 477508, 486654, 486657, 
		  486656, 486659, 486658, 468482, 486308, 477505, 493286, 476529, 474854, 458430, 
		  474853, 464052, 476762, 461079, 474858, 470668, 464050, 470667, 488785, 459859, 
		  459858, 464055, 481163, 484653, 457692, 484650, 484657, 459856, 459855, 457694, 
		  476865, 489296, 476553, 456101, 467599, 452123, 490397, 462626, 472104, 490394, 
		  490392, 490390, 489557, 453006, 489554, 489553, 459997, 470662, 458056, 454114, 
		  457151, 488685, 492865, 482205, 492863, 488681, 492861, 492860, 458722, 476862, 
		  479255, 492869, 483181, 453000, 454765, 454761, 467049, 460306, 455172, 467041, 
		  490643, 457646, 490645, 490644, 467047, 489333, 484886, 489331, 485653, 456614, 
		  485655, 485656, 453652, 485874, 485659, 485876, 485870, 485871, 485300, 488060, 
		  461511, 460305, 484885, 469995, 469994, 469997, 481558, 482457, 481555, 478972, 
		  481553, 493270, 459502, 454109, 490709, 486210, 490704, 467106, 453654, 467100, 
		  467101, 467102, 472054, 486481, 455222, 473508, 473505, 465147, 473507, 473506, 
		  473501, 473500, 478655, 475217, 475215, 478333, 475212, 475211, 475210, 470141, 
		  472507, 478658, 471904, 471902, 478621, 478623, 478622, 478248, 471908, 491115, 
		  490767, 458206, 466318, 491119, 489441, 478300, 465969, 470990, 460301, 470677, 
		  471076, 462506, 459278, 462355, 466458, 472512, 465545, 483028, 471078, 487223, 
		  466278, 487221, 470245, 491075, 452620, 491077, 483022, 452625, 452624, 463353, 
		  463352, 471936, 490927, 464816, 464815, 464814, 464813, 464810, 481971, 457901, 
		  457900, 457907, 457906, 459355, 457904, 481979, 457526, 457909, 457908, 456482, 
		  479576, 458034, 463685, 463683, 462358, 463680, 462359, 477738, 463689, 470665, 
		  478782, 470878, 455150, 478781, 453061, 470363, 472125, 470369, 479954, 471017, 
		  486021, 473689, 471019, 466798, 479957, 464405, 470400, 472296, 490761, 478788, 
		  472290, 467660, 482776, 482774, 482775, 456052, 482773, 482770, 456051, 474626, 
		  456058, 453579, 469058, 462088, 462089, 461263, 456566, 461261, 469050, 492251, 
		  462080, 469053, 469054, 473231, 460022, 460023, 460020, 466791, 460027, 460024, 
		  460025, 460028, 466797, 474997, 474994, 474993, 491595, 474999, 469234, 469235, 
		  462556, 469230, 469231, 462552, 492033, 460309, 479434, 492038, 469239, 461193, 
		  461194, 461197, 470336, 465329, 486393, 457345, 467698, 490099, 490094, 490096, 
		  490090, 467693, 485467, 482306, 482305, 482304, 482303, 453102, 453101, 482300, 
		  477655, 453109, 482308, 458238, 475868, 475869, 475861, 475862, 475865, 475867, 
		  464300, 457407, 476102, 485793, 485792, 485795, 485794, 485797, 485796, 458599, 
		  485798, 476108, 488931, 458690, 486366, 492137, 478633, 457404, 465598, 473383, 
		  465025, 468544, 468547, 468546, 493341, 468540, 468543, 468542, 468019, 468018, 
		  468549, 468548, 491084, 457687, 465778, 492419, 491086, 471839, 458934, 462649, 
		  491080, 480294, 478631, 484222, 481303, 481300, 484221, 481306, 484227, 488211, 
		  481305, 492412, 461852, 461856, 461857, 486845, 486846, 486847, 486512, 454374, 
		  483059, 470995, 486848, 457403, 477089, 458843, 458842, 471683, 483238, 466422, 
		  453813, 453812, 483234, 463622, 455356, 452437, 453819, 452432, 455353, 464642, 
		  464646, 464647, 464644, 464645, 466149, 470621, 464826, 470623, 492936, 470624, 
		  470627, 470994, 457487, 457485, 457480, 492930, 472843, 479814, 472841, 472840, 
		  479811, 477082, 479813, 473588, 478436, 477083, 478431, 478433, 487277, 473713, 
		  473715, 473716, 473717, 479213, 473719, 479211, 479210, 479214, 480131, 487214, 
		  454594, 469838, 454596, 454591, 454590, 490309, 462312, 462313, 469830, 469831, 
		  469836, 454598, 470195, 470194, 472178, 487210, 455044, 484910, 459711, 484912, 
		  453749, 459715, 458740, 484918, 453744, 482547, 453740, 456991, 453742, 478290, 
		  453954, 478292, 460223, 478295, 478296, 458547, 478298, 467848, 460819, 485744, 
		  489994, 472175, 471578, 480218, 471576, 455505, 480215, 460227, 471572, 456703, 
		  456196, 456195, 461255, 455507, 456190, 487073, 465009, 482091, 484697, 454900, 
		  453290, 454907, 484696, 482097, 454908, 462760, 462767, 462766, 489017, 453433, 
		  475008, 457654, 465045, 462726, 475002, 484693, 475000, 489015, 475006, 475004, 
		  484692, 471718, 458548, 471712, 456157, 481402, 471716, 476292, 476925, 476926, 
		  476291, 476920, 476297, 476295, 476299, 476928, 476929, 465414, 457781, 488416, 
		  459141, 459184, 465416, 455232, 458068, 455231, 455230, 481896, 481897, 481894, 
		  477269, 491918, 491916, 491917, 478498, 491911, 466571, 459148, 457244, 452830, 
		  457246, 475478, 461520, 475472, 478991, 488719, 461036, 457249, 475474, 483821, 
		  483792, 483823, 455821, 483824, 452195, 452194, 483829, 483828, 483799, 452198, 
		  478191, 465236, 465237, 467271, 454634, 465003, 492759, 469558, 489536, 460954, 
		  469550, 492753, 469552, 469555, 492754, 492757, 492756, 477523, 477521, 477520, 
		  477527, 472791, 458456, 457102, 477529, 477528, 458940, 457105, 457104, 452999, 
		  486678, 486088, 452993, 452990, 486677, 486676, 486675, 474870, 493451, 471207, 
		  458944, 454712, 491061, 463204, 454711, 493452, 471750, 493455, 459095, 466586, 
		  493457, 466584, 459092, 480855, 459912, 480328, 459812, 480859, 489755, 463960, 
		  463966, 463967, 463965, 489539, 489538, 463968, 493406, 492800, 493404, 468205, 
		  492805, 492804, 492807, 492808, 488916, 488665, 488662, 488911, 468208, 493409, 
		  467063, 490662, 490661, 490660, 467067, 467066, 490664, 454740, 454743, 454747, 
		  465127, 457759, 470769, 488876, 485328, 458129, 456678, 485639, 485632, 485633, 
		  485630, 456671, 485636, 485637, 485326, 485635, 454126, 481531, 480240, 481532, 
		  488006, 481534, 481537, 470760, 465583, 473526, 473524, 473521, 473520, 476429, 
		  486103, 473529, 462526, 476739, 476076, 483462, 458556, 476077, 476733, 478518, 
		  476735, 476074, 476737, 486104, 478351, 475270, 470851, 475274, 475276, 475279, 
		  482897, 478609, 478608, 486579, 471961, 486109, 471965, 471964, 471967, 486108, 
		  471969, 471968, 465835, 465830, 491132, 466333, 466335, 466336, 491137, 491138, 
		  462520, 459527, 458550, 459525, 459523, 459522, 464786, 483931, 464782, 464780, 
		  490988, 471492, 480662, 480663, 470681, 490982, 459301, 490981, 490986, 480668, 
		  480669, 452603, 483002, 452601, 455656, 452607, 455650, 483005, 483004, 492144, 
		  483009, 452608, 465786, 474277, 474274, 487242, 487244, 474270, 487246, 469841, 
		  458552, 474278, 474279, 464879, 464878, 477064, 477065, 463334, 492145, 464870, 
		  464872, 464875, 471384, 471386, 471381, 471380, 471383, 481952, 481950, 481957, 
		  481956, 479550, 479552, 479555, 479008, 472729, 472727, 455203, 479003, 479001, 
		  463347, 459264, 456074, 492147, 453048, 485837, 470382, 459899, 471038, 471035, 
		  471034, 462237, 471030, 461508, 474606, 474604, 474603, 464424, 477260, 490788, 
		  482750, 492233, 456072, 453553, 482754, 453555, 469034, 453557, 453558, 453559, 
		  469038, 470543, 461201, 461200, 461202, 461207, 461206, 458494, 471361, 466924, 
		  466927, 466926, 460008, 460009, 460559, 460006, 460007, 466929, 466928, 460002, 
		  463560, 470939, 487622, 492588, 473897, 469785, 492586, 472570, 458215, 492582, 
		  492583, 472026, 458212, 467762, 482361, 482363, 482362, 482365, 482364, 482367, 
		  482366, 485409, 482368, 456521, 467765, 475802, 475803, 475801, 475808, 475809, 
		  468782, 468781, 468780, 493186, 468785, 468784, 472308, 468789, 493188, 472309, 
		  472772, 461070, 459892, 472305, 476124, 476125, 476121, 476122, 477784, 472307, 
		  464279, 464278, 464277, 464275, 464274, 464273, 464272, 452386, 452387, 452385, 
		  452383, 468569, 493367, 468566, 468565, 468564, 493363, 468562, 483588, 452389, 
		  489277, 482987, 482986, 489272, 489270, 482982, 487624, 482989, 482988, 489279, 
		  457203, 461836, 463345, 461838, 493007, 488271, 470817, 488273, 481328, 484209, 
		  484758, 488276, 484204, 484757, 484754, 484207, 484200, 484753, 484202, 481323, 
		  486531, 466204, 486536, 486539, 454357, 454356, 454355, 468971, 458130, 472696, 
		  453839, 453837, 455401, 453835, 453834, 481494, 453831, 464668, 464669, 474045, 
		  474044, 474047, 464661, 474043, 481188, 470609, 477659, 481180, 477654, 470601, 
		  481183, 481184, 481185, 477653, 481187, 479838, 479835, 479834, 473783, 466861, 
		  473779, 473770, 460476, 473777, 469814, 462847, 469816, 462845, 462842, 462843, 
		  462332, 462841, 469818, 469819, 477389, 462849, 462504, 486369, 462503, 483178, 
		  458007, 483177, 456077, 462501, 480054, 480051, 480050, 466366, 482567, 453766, 
		  453765, 482564, 466365, 469514, 487582, 487580, 466364, 458006, 482569, 482568, 
		  489908, 462156, 455041, 484973, 462157, 459776, 484977, 484975, 480587, 480586, 
		  467869, 480584, 490519, 469513, 480581, 467315, 475393, 467317, 469512, 475396, 
		  467866, 475394, 471558, 485951, 479761, 479760, 471550, 471551, 471552, 485950, 
		  471554, 479769, 479768, 453495, 482697, 453499, 482698, 465026, 475024, 475025, 
		  478014, 454929, 475023, 454924, 466733, 475029, 454922, 471735, 471736, 471730, 
		  471733, 465649, 465648, 479491, 479494, 479496, 479499, 465020, 460326, 462286, 
		  458205, 483612, 483613, 483610, 483611, 472451, 483619, 491939, 487056, 484539, 
		  487722, 487053, 463522, 455448, 491932, 461441, 491937, 461015, 461016, 461541, 
		  461546, 461011, 461544, 461013, 485002, 464126, 465252, 477892, 465250, 477890, 
		  461445, 476837, 465255, 458308, 477899, 486632, 472555, 472554, 472557, 483808, 
		  452178, 472553, 457576, 452177, 483800, 483771, 483806, 483773, 452172, 458656, 
		  493246, 457574, 453137, 458474, 458654, 479697, 458300, 458405, 456413, 453396, 
		  492138, 464118, 456411, 479696, 457815, 465106, 465536, 481728, 482522, 474810, 
		  474817, 474815, 468196, 468197, 468193, 468190, 477957, 455628, 488610, 468198, 
		  472142, 460764, 472140, 460761, 482525, 491089, 490933, 480879, 480876, 480872, 
		  492773, 459114, 492771, 478583, 492777, 492776, 492775, 463944, 463946, 489041, 
		  463941, 463943, 468220, 493421, 492829, 454721, 454726, 465105, 454724, 454725, 
		  488392, 492822, 488390, 492820, 488396, 488645, 492825, 492824, 490559, 490689, 
		  467088, 490558, 467085, 490687, 467086, 467081, 490680, 490682, 485342, 456655, 
		  485340, 485610, 485611, 485344, 458413, 485349, 485618, 458419, 471636, 489310, 
		  478231, 458611, 470027, 460652, 458472, 465659, 465788, 470024, 473729, 480061, 
		  488548, 466680, 466681, 491483, 491485, 473547, 476714, 491488, 491489, 465789, 
		  473992, 456351, 464881, 486162, 465101, 459874, 475258, 475253, 478371, 475257, 
		  478375, 475254, 477713, 455092, 485964, 471948, 455097, 464886, 485960, 485961, 
		  470028, 465814, 465815, 471945, 465817, 491158, 466359, 473990, 466352, 466353, 
		  466350, 491151, 477906, 491157, 491154, 459541, 484564, 484566, 459545, 484560, 
		  481043, 481042, 459548, 481518, 484569, 457528, 480641, 480649, 466231, 479723, 
		  463313, 466232, 463315, 466234, 491036, 491039, 455676, 455672, 455670, 474252, 
		  474253, 474254, 474255, 487915, 474259, 464859, 460292, 487910, 487913, 487912, 
		  477040, 453108, 477043, 477044, 477045, 477046, 477047, 455888, 476672, 470015, 
		  470012, 470013, 470010, 486049, 488955, 473306, 479028, 452364, 479538, 479500, 
		  479532, 479021, 479022, 479531, 479536, 479026, 479027, 455887, 473782, 470208, 
		  460996, 455882, 473995, 460998, 471059, 471051, 471055, 471056, 474661, 474663, 
		  474667, 474666, 493258, 456018, 453539, 469019, 462048, 462049, 453532, 492215, 
		  469016, 482731, 462042, 469011, 469012, 469013, 461228, 461222, 461220, 461227, 
		  461224, 460578, 460579, 466909, 460570, 460571, 460575, 460576, 462271, 473895, 
		  462598, 462592, 478057, 463464, 459599, 488854, 492349, 485429, 482348, 492347, 
		  482343, 453142, 482341, 453140, 485427, 456466, 485425, 482344, 458409, 492345, 
		  475828, 463292, 478818, 461488, 475824, 475825, 475827, 461483, 461481, 476484, 
		  493169, 468768, 452589, 464625, 493167, 493166, 493161, 465603, 454781, 456670, 
		  492030, 469767, 463033, 465126, 463889, 488950, 469765, 484876, 459089, 459965, 
		  463880, 463883, 463882, 463885, 463884, 488953, 464211, 489799, 464215, 477171, 
		  455840, 468508, 455842, 455843, 460686, 489552, 486086, 486087, 468501, 468500, 
		  452814, 468502, 452812, 493307, 486731, 489250, 489251, 463083, 489253, 489255, 
		  463087, 489257, 489706, 489704, 485284, 458083, 458082, 485280, 477717, 461818, 
		  490954, 461816, 461817, 461810, 461811, 461812, 484778, 457739, 470832, 460319, 
		  484770, 484771, 484772, 484773, 488257, 484775, 484776, 467282, 486889, 486559, 
		  473890, 467026, 476574, 486881, 486882, 486551, 486885, 486554, 474067, 474066, 
		  474064, 474062, 467974, 453851, 473283, 473281, 453855, 473287, 473284, 473285, 
		  465385, 484483, 484480, 484481, 470953, 477672, 470951, 467471, 477678, 478209, 
		  490145, 467742, 467743, 467740, 490141, 456634, 490148, 467475, 479858, 458122, 
		  469882, 485672, 460317, 479856, 465407, 474390, 474393, 474392, 474394, 474396, 
		  476851, 485671, 462860, 484275, 472172, 465310, 462865, 470487, 488227, 459282, 
		  459283, 459287, 456286, 480077, 488225, 480073, 480070, 454138, 460973, 462075, 
		  480079, 488223, 455462, 455463, 485045, 455461, 458883, 455467, 458881, 455465, 
		  462073, 455468, 456639, 458888, 484954, 453700, 453703, 453702, 481702, 481703, 
		  453707, 482508, 484959, 481708, 481709, 490537, 490534, 490532, 490530, 462293, 
		  467339, 484090, 483267, 492698, 456028, 471538, 483260, 456676, 479701, 479700, 
		  473024, 479702, 476502];
class Variable
{
	public $type;
	public $operator;
	public $value;
	function __construct($type, $operator, $value)
	{
		$this->type = $type;
		$this->operator = $operator;
		$this->value = $value;
		if($type != "Gender" && $type != "Race")
			$this->value = intval($value);
	}
}
class Operator
{
	public $type;
	public $precedence;
	function __construct($type)
	{
		$this->type = $type;
		if($type == "!")$this->precedence = 3;
		else if($type == "&")$this->precedence = 2;
			else if($type == "|")$this->precedence = 1;
			else
		{
			$this->precedence = 0;
		}
	}
}
// set base url
const IRCT_REST_BASE_URL = 'http://bd2k-picsure.hms.harvard.edu/';
// set rest url
const IRCT_CL_SERVICE_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/';
// set service urls
const IRCT_RESOURCE_BASE_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/resourceService/';
const IRCT_QUERY_BASE_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/queryRESTService/';
const IRCT_RESULTS_BASE_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/resultService/';
// set list resources
const IRCT_LIST_RESOURCE_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/resourceService/resources';
// set query
const IRCT_START_QUERY_URL =  'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/queryRESTService/startQuery';
const IRCT_WHERE_QUERY_URL =  'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/queryRESTService/whereClause';
const IRCT_RUN_QUERY_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/queryRESTService/runQuery';
// add select clause
const IRCT_SELECT_QUERY_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/queryRESTService/selectClause';
// get results
const IRCT_GET_JSON_RESULTS_URL = 'http://bd2k-picsure.hms.harvard.edu/IRCT-CL/rest/resultService/download/json';
//consts for clauses
const temp____ = 'NHANES Public/Public Studies///NHANES';
const RACE = '/NHANES/demographics/RACE/';
const RACE_ = '\\NHANES\\demographics\\RACE\\';
const GENDER = '/NHANES/demographics/SEX/';
const GENDER_ = '\\NHANES\\demographics\\SEX\\';
const AGE = '/NHANES/demographics/AGE/';
const AGE_ = '\\NHANES\\demographics\\AGE\\';
const MEAN_DIASTOLIC = '/NHANES/examination/blood pressure/mean diastolic/';
const MEAN_DIASTOLIC_ = '\\NHANES\\examination\\blood pressure\\mean diastolic\\';
const MEAN_SYSTOLIC = '/NHANES/examination/blood pressure/mean systolic/';
const MEAN_SYSTOLIC_ = '\\NHANES\\examination\\blood pressure\\mean systolic\\';
const BMI = '/NHANES/examination/body measures/Body Mass Index (kg/m**2)/';
const BMI_ = '\\NHANES\\examination\\body measures\\Body Mass Index (kg/m**2)\\';
const STANDING_HEIGHT = '/NHANES/examination/body measures/Standing Height (cm)/';
const STANDING_HEIGHT_ = '\\NHANES\\examination\\body measures\\Standing Height (cm)\\';
const WEIGHT = '/NHANES/examination/body measures/Weight (kg)/';
const WEIGHT_ = '\\NHANES\\examination\\body measures\\Weight (kg)\\';
const GLUCOSE_SERUM = '/NHANES/laboratory/biochemistry/Glucose, serum (mg/dL)/';
const GLUCOSE_SERUM_ = '\\NHANES\\laboratory\\biochemistry\\Glucose, serum (mg/dL)\\';
const URIC_ACID = '/NHANES/laboratory/biochemistry/Uric acid (mg/dL)/';
const URIC_ACID_ = '\\NHANES\\laboratory\\biochemistry\\Uric acid (mg/dL)\\';
const TOTAL_CHOLESTEROL = '/NHANES/laboratory/biochemistry/Total Cholesterol (mg/dL)/';
const TOTAL_CHOLESTEROL_ = '\\NHANES\\laboratory\\biochemistry\\Total Cholesterol (mg/dL)\\';
//const RACE_ARRAY = ["white","black","other","other_hispanic","mexican"];
//const GENDER_ARRAY = ["male","female"];
//function that help to chop the id conversation id from string
function chopToId($conversationId_)
{
	$num=0;
	$sum=0;
	for($i = 0;;$i++)
	{   
		if(ord($conversationId_[$i]) == ord('"'))
		{
			$num++;
			if($num==4) {
				break;
			}
			continue;
		}
		else if($num == 3) 
		{
			$sum*=10;
			$sum+=(ord($conversationId_[$i])-ord('0'));
		}
	}
	return $sum;        
}
//function that help to chop the id result id from string
function chopToId2($resultId_)
{
	$sum=0;
	for($i = 0;$i < strlen($resultId_) - 1;$i++)
	{
		if($resultId_[$i] == ':')
			continue;
		$sum*=10;
		$sum+=(ord($resultId_[$i])-ord('0'));
	}
	return $sum;        
}
// function that returns a list of patients whose info on certain type matches
// the requirement (eg. age, mean diastolic...)
function getPatient_Info($results, $type, $operator, $value)
{
	$myList = [];
	// replace all '/' to '\'
	for ($i = 0; $i < count($results); $i++)
	{
		// for greater than condition
		if(strpos($type, GENDER_) !== false ||
		   strpos($type, RACE_) !== false)
		{
			//echo "true<br>"; 
			//if($i % 100 == 0)echo strlen($results[$i][$type])."<br>";
			if(strlen($results[$i][$type]) != 0)
			{
				$myList[] = intval($results[$i]["PATIENT_NUM"]);
			}
			continue;
		}
		if ($operator == '>')
		{
			if (intval($results[$i][$type]) > $value)
			{
				$myList[] = intval($results[$i]["PATIENT_NUM"]);
			}
		}
		// for greater than or equal to
		else if ($operator == '>=')
		{
			if (intval($results[$i][$type]) >= $value)
			{
				$myList[] = intval($results[$i]["PATIENT_NUM"]);
			}
		}
		// for less than
		else if ($operator == '<')
		{
			if (intval($results[$i][$type]) < $value)
			{
				$myList[] = intval($results[$i]["PATIENT_NUM"]);
			}
		}
		// for less than or equal to
		else if ($operator == '<=')
		{
			if (intval($results[$i][$type]) <= $value)
			{
				$myList[] = intval($results[$i]["PATIENT_NUM"]);
			}
		}
		// for not equal to
		else if ($operator == '!=')
		{
			if (intval($results[$i][$type]) != $value)
			{
				$myList[] = intval($results[$i]["PATIENT_NUM"]);
			}
		}
		// for equal to
		else if ($operator == '=')
		{
			if (intval($results[$i][$type]) == $value)
			{
				$myList[] = intval($results[$i]["PATIENT_NUM"]);
			}
		}
	}
	return $myList;
}    

sort($allId);
$parsedString = "";
if(!isset($_SERVER['QUERY_STRING']))
	goto end;
$tempString = urldecode($_SERVER['QUERY_STRING']);
//the stack that is used to evaluate the logic statement
$stack1 = [];
$stack2 = [];
$layer = 0;
$index = 0;
//get the part of pic-sure
while($index < strlen($tempString))
{
	if($tempString[$index] == '(')
		$layer++;
	else if($tempString[$index] == ')')
	{
		$layer--;
	} 
	if(substr($tempString, $index, 3) == "AND" && $layer == 1)
		break;
	$parsedString .= $tempString[$index];
	$index ++;
}
$parsedString = substr($parsedString, 2);
$parsedString = substr($parsedString, 0, -3);
//parsing the logical statement into variables and operators
//this will end in push every object into stack1 which is actually a postfix
//expression
$index = 0;
while($index < strlen($parsedString))
{
	if(substr($parsedString,$index,1) == ' ')
	{
		$index ++;
		continue;
	}
	else if(substr($parsedString,$index,1) == '(')
	{
		array_push($stack2, new Operator('(')); 
	}
	else if(substr($parsedString,$index,1) == ')')
	{
		while(sizeof($stack2) != 0)
		{
			$temp = array_pop($stack2);
			if($temp->type != "(")
			{
				array_push($stack1, $temp);
			}
			else
			{
				break;
			}
		}
	}
	else
	{
		//solving operator and variable
		$tempOperator;
		$hasDot = false;
		$countSpace = 0;
		$countQuote = 0;
		$tempVarType = "";
		$tempVarOperator = "";
		$tempVarVal = "";
		if(substr($parsedString,$index,3) == "NOT")
		{
			$tempOperator = new Operator("!");
			$index += 3;
		}
		else if(substr($parsedString, $index, 3) == "AND")
		{
			$tempOperator = new Operator("&");
			$index += 3;
		}
		else if(substr($parsedString, $index, 2) == "OR")
		{
			$tempOperator = new Operator("|");
			$index += 3;
		}
		else
		{
			//variable will be parsed here
			//will continue looping after finish parsing this
			while($countQuote < 2)
			{
				if($parsedString[$index] != '.' && $hasDot == false)
				{
					$index++;
					if($index > sizeof($parsedString))break;
					continue;
				}   
				else if($parsedString[$index] == "." )
				{
					$hasDot = true;
					$index ++;
					continue;
				}
				else
				{
					//parse type
					while($countSpace < 1)
					{
						if($parsedString[$index] != " ")
						{
							$tempVarType .= $parsedString[$index];
						}
						else
						{
							$countSpace++;
						}
						$index++;
					}
					//parse operator
					while($countSpace < 2)
					{
						if($parsedString[$index] != " ")
						{
							$tempVarOperator .= $parsedString[$index];
						}
						else
						{
							$countSpace++;
						}
						$index++;
					}
					if($parsedString[$index] == "'" && $countQuote != 1)
					{
						$countQuote ++;
						$index ++;
						while($parsedString[$index] != "'")
						{
							$tempVarVal .= $parsedString[$index];
							$index++;
						}
						break;
					}
				}
			}
			if(strlen($tempVarType) != 0)
			{
				$tempVar = new Variable($tempVarType,
										$tempVarOperator,$tempVarVal);
				array_push($stack1, $tempVar);
			}
			continue;
		}
		/* repeatedly push to stack1 until stack2 is empty or
* stack2's top symbol has a lower priority than the one
* entered */
		if(sizeof($stack2) != 0)
		{
			$tmp = $stack2[sizeof($stack2) - 1];
			if($tmp->precedence <= $tempOperator->precedence)
			{
				array_push($stack2, $tempOperator);
			}
			else
			{
				while(sizeof($stack2) != 0 && 
					  $tmp->precedence > $tempOperator->precedence)
				{
					$tmp = array_pop($stack2);
					array_push($stack1, $tmp);
					if(sizeof($stack2) != 0)
					{
						$tmp = $stack2[sizeof($stack2) - 1];
					}
				}
				array_push($stack2, $tempOperator);
			}
		}
		else
		{
			array_push($stack2, $tempOperator);
		}
		continue;
	}
	$index++;
}
while(sizeof($stack2) != 0)
{
	$tmp = array_pop($stack2);
	array_push($stack1, $tmp);
}

$decoded = file_get_contents("./cache");
$results = unserialize($decoded);
$all = [];
for($i = 0; $i < count($results[0]); $i++)
{
	$all[$i] = intval($results[0][$i]["PATIENT_NUM"]);
}

while(sizeof($stack1) != 0)
{
	$temp = array_pop($stack1);
	array_push($stack2, $temp);
}
while(sizeof($stack2) != 0)
{
	$temp = array_pop($stack2);
	if(get_class($temp) == "Variable")
	{
		array_push($stack1, $temp);
	}
	else
	{
		if($temp->type == "!")
		{
			$temp1 = array_pop($stack1);
			$result1;
			switch($temp1->type)
			{
				case "Gender":
				$result1 = getPatient_Info($results[1],
										   GENDER_ . $temp1->value . '\\',
										   $temp1->operator, $temp1->value);
				break;
				case "Race":
				$result1 = getPatient_Info($results[0],
										   RACE_ . $temp1->value . '\\',
										   $temp1->operator, $temp1->value);
				break;
				case "Age":
				$result1 = getPatient_Info($results[2],
										   AGE_, $temp1->operator, $temp1->value);
				break;
				case "Mean_Diastolic":
				$result1 = getPatient_Info($results[3],
										   MEAN_DIASTOLIC_, $temp1->operator, $temp1->value);
				break;
				case "Mean_Systolic":
				$result1 = getPatient_Info($results[4],
										   MEAN_SYSTOLIC_, $temp1->operator, $temp1->value);
				break;
				case "BMI":
				$result1 = getPatient_Info($results[5],
										   BMI_, $temp1->operator, $temp1->value);
				break;
				case "Height":
				$result1 = getPatient_Info($results[6],
										   STANDING_HEIGHT_, $temp1->operator, $temp1->value);
				break;
				case "Weight":
				$result1 = getPatient_Info($results[7],
										   WEIGHT_, $temp1->operator, $temp1->value);
				break;
				case "Serum_Glucose":
				$result1 = getPatient_Info($results[8],
										   GLUCOSE_SERUM_, $temp1->operator, $temp1->value);
				break;
				case "Uric_Acid":
				$result1 = getPatient_Info($results[9],
										   URIC_ACID_, $temp1->operator, $temp1->value);
				break;
				case "Total_Cholesterol":
				$result1 = getPatient_Info($results[10],
										   TOTAL_CHOLESTEROL_, $temp1->operator, $temp1->value);
				break;
			}
			$result = array_diff($all, $result1);
			//var_dump($result);
			array_push($stack1, $result);
		}
		else
		{
			$temp1 = array_pop($stack1);
			$temp2 = array_pop($stack1);
			$result1;
			$result2;
			if(!is_array($temp1))
			{
				switch($temp1->type)
				{
					case "Gender":
					$result1 = getPatient_Info($results[1],
											   GENDER_ . $temp1->value . '\\',
											   $temp1->operator, $temp1->value);
					break;
					case "Race":
					$result1 = getPatient_Info($results[0],
											   RACE_ . $temp1->value . '\\',
											   $temp1->operator, $temp1->value);
					break;
					case "Age":
					$result1 = getPatient_Info($results[2],
											   AGE_, $temp1->operator, $temp1->value);
					break;
					case "Mean_Diastolic":
					$result1 = getPatient_Info($results[3],
											   MEAN_DIASTOLIC_, $temp1->operator, $temp1->value);
					break;
					case "Mean_Systolic":
					$result1 = getPatient_Info($results[4],
											   MEAN_SYSTOLIC_, $temp1->operator, $temp1->value);
					break;
					case "BMI":
					$result1 = getPatient_Info($results[5],
											   BMI_, $temp1->operator, $temp1->value);
					break;
					case "Height":
					$result1 = getPatient_Info($results[6],
											   STANDING_HEIGHT_, $temp1->operator, $temp1->value);
					break;
					case "Weight":
					$result1 = getPatient_Info($results[7],
											   WEIGHT_, $temp1->operator, $temp1->value);
					break;
					case "Serum_Glucose":
					$result1 = getPatient_Info($results[8],
											   GLUCOSE_SERUM_, $temp1->operator, $temp1->value);
					break;
					case "Uric_Acid":
					$result1 = getPatient_Info($results[9],
											   URIC_ACID_, $temp1->operator, $temp1->value);
					break;
					case "Total_Cholesterol":
					$result1 = getPatient_Info($results[10],
											   TOTAL_CHOLESTEROL_, $temp1->operator, $temp1->value);
					break;
				}
			}
			else
			{
				$result1 = $temp1;
			}
			if(!is_array($temp2))
			{
				switch($temp2->type)
				{
					case "Gender":
					$result2 = getPatient_Info($results[1],
											   GENDER_ . $temp2->value . '\\',
											   $temp2->operator, $temp2->value);
					break;
					case "Race":
					$result2 = getPatient_Info($results[0],
											   RACE_ . $temp2->value . '\\',
											   $temp2->operator, $temp2->value);
					break;
					case "Age":
					$result2 = getPatient_Info($results[2],
											   AGE_, $temp2->operator, $temp2->value);
					break;
					case "Mean_Diastolic":
					$result2 = getPatient_Info($results[3],
											   MEAN_DIASTOLIC_, $temp2->operator, $temp2->value);
					break;
					case "Mean_Systolic":
					$result2 = getPatient_Info($results[4],
											   MEAN_SYSTOLIC_, $temp2->operator, $temp2->value);
					break;
					case "BMI":
					$result2 = getPatient_Info($results[5],
											   BMI_, $temp2->operator, $temp2->value);
					break;
					case "Height":
					$result2 = getPatient_Info($results[6],
											   STANDING_HEIGHT_, $temp2->operator, $temp2->value);
					break;
					case "Weight":
					$result2 = getPatient_Info($results[7],
											   WEIGHT_, $temp2->operator, $temp2->value);
					break;
					case "Serum_Glucose":
					$result2 = getPatient_Info($results[8],
											   GLUCOSE_SERUM_, $temp2->operator, $temp2->value);
					break;
					case "Uric_Acid":
					$result2 = getPatient_Info($results[9],
											   URIC_ACID_, $temp2->operator, $temp2->value);
					break;
					case "Total_Cholesterol":
					$result2 = getPatient_Info($results[10],
											   TOTAL_CHOLESTEROL_, $temp2->operator, $temp2->value);
					break;
				}
			}
			else
			{
				$result2 = $temp2;
			}
			if($temp->type == "&")
			{
				$result = array_intersect($result1, $result2);
			}
			else
			{
				$result = array_merge($result1, $result2);
			}
			array_push($stack1, $result);
		}
	}
}

$temp = array_pop($stack1);

if(is_array($temp) !== true)
{
	switch($temp->type)
	{
		case "Gender":
		$temp = getPatient_Info($results[1],
								GENDER_ . $temp->value . '\\',
								$temp->operator, $temp->value);
		break;
		case "Race":
		$temp = getPatient_Info($results[0],
								RACE_ . $temp->value . '\\',
								$temp->operator, $temp->value);
		break;
		case "Age":
		$temp = getPatient_Info($results[2],
								AGE_, $temp->operator, $temp->value);
		break;
		case "Mean_Diastolic":
		$temp = getPatient_Info($results[3],
								MEAN_DIASTOLIC_, $temp->operator, $temp->value);
		break;
		case "Mean_Systolic":
		$temp = getPatient_Info($results[4],
								MEAN_SYSTOLIC_, $temp->operator, $temp->value);
		break;
		case "BMI":
		$temp = getPatient_Info($results[5],
								BMI_, $temp->operator, $temp->value);
		break;
		case "Height":
		$temp = getPatient_Info($results[6],
								STANDING_HEIGHT_, $temp->operator, $temp->value);
		break;
		case "Weight":
		$temp = getPatient_Info($results[7],
								WEIGHT_, $temp->operator, $temp->value);
		break;
		case "Serum_Glucose":
		$temp = getPatient_Info($results[8],
								GLUCOSE_SERUM_, $temp->operator, $temp->value);
		break;
		case "Uric_Acid":
		$temp = getPatient_Info($results[9],
								URIC_ACID_, $temp->operator, $temp->value);
		break;
		case "Total_Cholesterol":
		$temp = getPatient_Info($results[10],
								TOTAL_CHOLESTEROL_, $temp->operator, $temp->value);
		break;
	}
}

$result = array_intersect($allId, $temp);
$num = sizeof($result);
$temp = array_fill(0, 2504, 0);

foreach($result as &$value)
{
	$tmp = array_search($value, $allId);
	$temp[$tmp] = 1;
}
$result = $temp;
echo "<br>count is ".$num."<br>";
var_dump($result);
$s1 = array(1, 0, 1, 0, 0, 1, 0, 1, 0, 0);
$CSP_addr = "csp.ucsd-dbmi.org";
$PRO_addr = "counteverything.ucsd-dbmi.org";
$CSP_port = 9000;
$PRO_port = 9010;
$Bit_num = 1024;
$Thr_num = 6;
$Party_num = 3;
$picData = new java("Parties.DataOwner",$CSP_addr,$PRO_addr,$CSP_port,$PRO_port,$result,$Bit_num,$Thr_num);
$picData->run();    
end:
echo "<br>";
return 0;
?>
