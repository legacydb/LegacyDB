<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	
	public function items(Request $request){
		
		/*
		echo '<pre>';
		echo print_r($request->all());
		echo '</pre>';
		*/
		
	$custom_items = array(
		array( // row #0
			'entry' => 13482,
			'required_reputation_value' => 'Honored',
		),
		array( // row #1
			'entry' => 13484,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #2
			'entry' => 13724,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #3
			'entry' => 13810,
			'required_reputation_value' => 'Revered',
		),
		array( // row #4
			'entry' => 13813,
			'required_reputation_value' => 'Revered',
		),
		array( // row #5
			'entry' => 16768,
			'required_reputation_value' => 'Honored',
		),
		array( // row #6
			'entry' => 16769,
			'required_reputation_value' => 'Honored',
		),
		array( // row #7
			'entry' => 17017,
			'required_reputation_value' => 'Honored',
		),
		array( // row #8
			'entry' => 17018,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #9
			'entry' => 17022,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #10
			'entry' => 17023,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #11
			'entry' => 17025,
			'required_reputation_value' => 'Honored',
		),
		array( // row #12
			'entry' => 17049,
			'required_reputation_value' => 'Honored',
		),
		array( // row #13
			'entry' => 17051,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #14
			'entry' => 17052,
			'required_reputation_value' => 'Revered',
		),
		array( // row #15
			'entry' => 17053,
			'required_reputation_value' => 'Revered',
		),
		array( // row #16
			'entry' => 17059,
			'required_reputation_value' => 'Honored',
		),
		array( // row #17
			'entry' => 17060,
			'required_reputation_value' => 'Honored',
		),
		array( // row #18
			'entry' => 18169,
			'required_reputation_value' => 'Revered',
		),
		array( // row #19
			'entry' => 18170,
			'required_reputation_value' => 'Revered',
		),
		array( // row #20
			'entry' => 18171,
			'required_reputation_value' => 'Revered',
		),
		array( // row #21
			'entry' => 18172,
			'required_reputation_value' => 'Revered',
		),
		array( // row #22
			'entry' => 18173,
			'required_reputation_value' => 'Revered',
		),
		array( // row #23
			'entry' => 18182,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #24
			'entry' => 19029,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #25
			'entry' => 19030,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #26
			'entry' => 19031,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #27
			'entry' => 19032,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #28
			'entry' => 19045,
			'required_reputation_value' => 'Revered',
		),
		array( // row #29
			'entry' => 19046,
			'required_reputation_value' => 'Revered',
		),
		array( // row #30
			'entry' => 19083,
			'required_reputation_value' => 'Honored',
		),
		array( // row #31
			'entry' => 19084,
			'required_reputation_value' => 'Honored',
		),
		array( // row #32
			'entry' => 19085,
			'required_reputation_value' => 'Honored',
		),
		array( // row #33
			'entry' => 19086,
			'required_reputation_value' => 'Honored',
		),
		array( // row #34
			'entry' => 19087,
			'required_reputation_value' => 'Honored',
		),
		array( // row #35
			'entry' => 19088,
			'required_reputation_value' => 'Honored',
		),
		array( // row #36
			'entry' => 19089,
			'required_reputation_value' => 'Honored',
		),
		array( // row #37
			'entry' => 19090,
			'required_reputation_value' => 'Honored',
		),
		array( // row #38
			'entry' => 19091,
			'required_reputation_value' => 'Honored',
		),
		array( // row #39
			'entry' => 19092,
			'required_reputation_value' => 'Honored',
		),
		array( // row #40
			'entry' => 19093,
			'required_reputation_value' => 'Honored',
		),
		array( // row #41
			'entry' => 19094,
			'required_reputation_value' => 'Honored',
		),
		array( // row #42
			'entry' => 19095,
			'required_reputation_value' => 'Honored',
		),
		array( // row #43
			'entry' => 19096,
			'required_reputation_value' => 'Honored',
		),
		array( // row #44
			'entry' => 19097,
			'required_reputation_value' => 'Honored',
		),
		array( // row #45
			'entry' => 19098,
			'required_reputation_value' => 'Honored',
		),
		array( // row #46
			'entry' => 19099,
			'required_reputation_value' => 'Revered',
		),
		array( // row #47
			'entry' => 19100,
			'required_reputation_value' => 'Revered',
		),
		array( // row #48
			'entry' => 19101,
			'required_reputation_value' => 'Revered',
		),
		array( // row #49
			'entry' => 19102,
			'required_reputation_value' => 'Revered',
		),
		array( // row #50
			'entry' => 19103,
			'required_reputation_value' => 'Revered',
		),
		array( // row #51
			'entry' => 19104,
			'required_reputation_value' => 'Revered',
		),
		array( // row #52
			'entry' => 19202,
			'required_reputation_value' => 'Honored',
		),
		array( // row #53
			'entry' => 19203,
			'required_reputation_value' => 'Honored',
		),
		array( // row #54
			'entry' => 19204,
			'required_reputation_value' => 'Revered',
		),
		array( // row #55
			'entry' => 19205,
			'required_reputation_value' => 'Revered',
		),
		array( // row #56
			'entry' => 19206,
			'required_reputation_value' => 'Honored',
		),
		array( // row #57
			'entry' => 19207,
			'required_reputation_value' => 'Revered',
		),
		array( // row #58
			'entry' => 19208,
			'required_reputation_value' => 'Revered',
		),
		array( // row #59
			'entry' => 19209,
			'required_reputation_value' => 'Revered',
		),
		array( // row #60
			'entry' => 19210,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #61
			'entry' => 19211,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #62
			'entry' => 19212,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #63
			'entry' => 19215,
			'required_reputation_value' => 'Honored',
		),
		array( // row #64
			'entry' => 19216,
			'required_reputation_value' => 'Honored',
		),
		array( // row #65
			'entry' => 19217,
			'required_reputation_value' => 'Revered',
		),
		array( // row #66
			'entry' => 19218,
			'required_reputation_value' => 'Revered',
		),
		array( // row #67
			'entry' => 19219,
			'required_reputation_value' => 'Honored',
		),
		array( // row #68
			'entry' => 19220,
			'required_reputation_value' => 'Revered',
		),
		array( // row #69
			'entry' => 19308,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #70
			'entry' => 19309,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #71
			'entry' => 19310,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #72
			'entry' => 19311,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #73
			'entry' => 19312,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #74
			'entry' => 19315,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #75
			'entry' => 19316,
			'required_reputation_value' => 'Honored',
		),
		array( // row #76
			'entry' => 19317,
			'required_reputation_value' => 'Honored',
		),
		array( // row #77
			'entry' => 19319,
			'required_reputation_value' => 'Revered',
		),
		array( // row #78
			'entry' => 19320,
			'required_reputation_value' => 'Revered',
		),
		array( // row #79
			'entry' => 19321,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #80
			'entry' => 19323,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #81
			'entry' => 19324,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #82
			'entry' => 19325,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #83
			'entry' => 19326,
			'required_reputation_value' => 'Honored',
		),
		array( // row #84
			'entry' => 19327,
			'required_reputation_value' => 'Revered',
		),
		array( // row #85
			'entry' => 19328,
			'required_reputation_value' => 'Honored',
		),
		array( // row #86
			'entry' => 19329,
			'required_reputation_value' => 'Revered',
		),
		array( // row #87
			'entry' => 19330,
			'required_reputation_value' => 'Honored',
		),
		array( // row #88
			'entry' => 19331,
			'required_reputation_value' => 'Revered',
		),
		array( // row #89
			'entry' => 19332,
			'required_reputation_value' => 'Revered',
		),
		array( // row #90
			'entry' => 19333,
			'required_reputation_value' => 'Revered',
		),
		array( // row #91
			'entry' => 19442,
			'required_reputation_value' => 'Honored',
		),
		array( // row #92
			'entry' => 19444,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #93
			'entry' => 19445,
			'required_reputation_value' => 'Honored',
		),
		array( // row #94
			'entry' => 19446,
			'required_reputation_value' => 'Honored',
		),
		array( // row #95
			'entry' => 19447,
			'required_reputation_value' => 'Revered',
		),
		array( // row #96
			'entry' => 19448,
			'required_reputation_value' => 'Honored',
		),
		array( // row #97
			'entry' => 19449,
			'required_reputation_value' => 'Revered',
		),
		array( // row #98
			'entry' => 19505,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #99
			'entry' => 19506,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #100
			'entry' => 19510,
			'required_reputation_value' => 'Honored',
		),
		array( // row #101
			'entry' => 19511,
			'required_reputation_value' => 'Honored',
		),
		array( // row #102
			'entry' => 19512,
			'required_reputation_value' => 'Honored',
		),
		array( // row #103
			'entry' => 19513,
			'required_reputation_value' => 'Honored',
		),
		array( // row #104
			'entry' => 19514,
			'required_reputation_value' => 'Honored',
		),
		array( // row #105
			'entry' => 19515,
			'required_reputation_value' => 'Honored',
		),
		array( // row #106
			'entry' => 19516,
			'required_reputation_value' => 'Honored',
		),
		array( // row #107
			'entry' => 19517,
			'required_reputation_value' => 'Honored',
		),
		array( // row #108
			'entry' => 19518,
			'required_reputation_value' => 'Honored',
		),
		array( // row #109
			'entry' => 19519,
			'required_reputation_value' => 'Honored',
		),
		array( // row #110
			'entry' => 19520,
			'required_reputation_value' => 'Honored',
		),
		array( // row #111
			'entry' => 19521,
			'required_reputation_value' => 'Honored',
		),
		array( // row #112
			'entry' => 19522,
			'required_reputation_value' => 'Honored',
		),
		array( // row #113
			'entry' => 19523,
			'required_reputation_value' => 'Honored',
		),
		array( // row #114
			'entry' => 19524,
			'required_reputation_value' => 'Honored',
		),
		array( // row #115
			'entry' => 19525,
			'required_reputation_value' => 'Honored',
		),
		array( // row #116
			'entry' => 19526,
			'required_reputation_value' => 'Honored',
		),
		array( // row #117
			'entry' => 19527,
			'required_reputation_value' => 'Honored',
		),
		array( // row #118
			'entry' => 19528,
			'required_reputation_value' => 'Honored',
		),
		array( // row #119
			'entry' => 19529,
			'required_reputation_value' => 'Honored',
		),
		array( // row #120
			'entry' => 19530,
			'required_reputation_value' => 'Honored',
		),
		array( // row #121
			'entry' => 19531,
			'required_reputation_value' => 'Honored',
		),
		array( // row #122
			'entry' => 19532,
			'required_reputation_value' => 'Honored',
		),
		array( // row #123
			'entry' => 19533,
			'required_reputation_value' => 'Honored',
		),
		array( // row #124
			'entry' => 19534,
			'required_reputation_value' => 'Honored',
		),
		array( // row #125
			'entry' => 19535,
			'required_reputation_value' => 'Honored',
		),
		array( // row #126
			'entry' => 19536,
			'required_reputation_value' => 'Honored',
		),
		array( // row #127
			'entry' => 19537,
			'required_reputation_value' => 'Honored',
		),
		array( // row #128
			'entry' => 19538,
			'required_reputation_value' => 'Honored',
		),
		array( // row #129
			'entry' => 19539,
			'required_reputation_value' => 'Honored',
		),
		array( // row #130
			'entry' => 19540,
			'required_reputation_value' => 'Honored',
		),
		array( // row #131
			'entry' => 19541,
			'required_reputation_value' => 'Honored',
		),
		array( // row #132
			'entry' => 19542,
			'required_reputation_value' => 'Revered',
		),
		array( // row #133
			'entry' => 19543,
			'required_reputation_value' => 'Revered',
		),
		array( // row #134
			'entry' => 19544,
			'required_reputation_value' => 'Revered',
		),
		array( // row #135
			'entry' => 19545,
			'required_reputation_value' => 'Revered',
		),
		array( // row #136
			'entry' => 19546,
			'required_reputation_value' => 'Revered',
		),
		array( // row #137
			'entry' => 19547,
			'required_reputation_value' => 'Revered',
		),
		array( // row #138
			'entry' => 19548,
			'required_reputation_value' => 'Revered',
		),
		array( // row #139
			'entry' => 19549,
			'required_reputation_value' => 'Revered',
		),
		array( // row #140
			'entry' => 19550,
			'required_reputation_value' => 'Revered',
		),
		array( // row #141
			'entry' => 19551,
			'required_reputation_value' => 'Revered',
		),
		array( // row #142
			'entry' => 19552,
			'required_reputation_value' => 'Revered',
		),
		array( // row #143
			'entry' => 19553,
			'required_reputation_value' => 'Revered',
		),
		array( // row #144
			'entry' => 19554,
			'required_reputation_value' => 'Revered',
		),
		array( // row #145
			'entry' => 19555,
			'required_reputation_value' => 'Revered',
		),
		array( // row #146
			'entry' => 19556,
			'required_reputation_value' => 'Revered',
		),
		array( // row #147
			'entry' => 19557,
			'required_reputation_value' => 'Revered',
		),
		array( // row #148
			'entry' => 19558,
			'required_reputation_value' => 'Revered',
		),
		array( // row #149
			'entry' => 19559,
			'required_reputation_value' => 'Revered',
		),
		array( // row #150
			'entry' => 19560,
			'required_reputation_value' => 'Revered',
		),
		array( // row #151
			'entry' => 19561,
			'required_reputation_value' => 'Revered',
		),
		array( // row #152
			'entry' => 19562,
			'required_reputation_value' => 'Revered',
		),
		array( // row #153
			'entry' => 19563,
			'required_reputation_value' => 'Revered',
		),
		array( // row #154
			'entry' => 19564,
			'required_reputation_value' => 'Revered',
		),
		array( // row #155
			'entry' => 19565,
			'required_reputation_value' => 'Revered',
		),
		array( // row #156
			'entry' => 19566,
			'required_reputation_value' => 'Revered',
		),
		array( // row #157
			'entry' => 19567,
			'required_reputation_value' => 'Revered',
		),
		array( // row #158
			'entry' => 19568,
			'required_reputation_value' => 'Revered',
		),
		array( // row #159
			'entry' => 19569,
			'required_reputation_value' => 'Revered',
		),
		array( // row #160
			'entry' => 19570,
			'required_reputation_value' => 'Revered',
		),
		array( // row #161
			'entry' => 19571,
			'required_reputation_value' => 'Revered',
		),
		array( // row #162
			'entry' => 19572,
			'required_reputation_value' => 'Revered',
		),
		array( // row #163
			'entry' => 19573,
			'required_reputation_value' => 'Revered',
		),
		array( // row #164
			'entry' => 19578,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #165
			'entry' => 19580,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #166
			'entry' => 19581,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #167
			'entry' => 19582,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #168
			'entry' => 19583,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #169
			'entry' => 19584,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #170
			'entry' => 19587,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #171
			'entry' => 19589,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #172
			'entry' => 19590,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #173
			'entry' => 19595,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #174
			'entry' => 19596,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #175
			'entry' => 19597,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #176
			'entry' => 19764,
			'required_reputation_value' => 'Revered',
		),
		array( // row #177
			'entry' => 19765,
			'required_reputation_value' => 'Honored',
		),
		array( // row #178
			'entry' => 19766,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #179
			'entry' => 19769,
			'required_reputation_value' => 'Revered',
		),
		array( // row #180
			'entry' => 19770,
			'required_reputation_value' => 'Honored',
		),
		array( // row #181
			'entry' => 19771,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #182
			'entry' => 19772,
			'required_reputation_value' => 'Revered',
		),
		array( // row #183
			'entry' => 19773,
			'required_reputation_value' => 'Honored',
		),
		array( // row #184
			'entry' => 19776,
			'required_reputation_value' => 'Revered',
		),
		array( // row #185
			'entry' => 19777,
			'required_reputation_value' => 'Honored',
		),
		array( // row #186
			'entry' => 19778,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #187
			'entry' => 19779,
			'required_reputation_value' => 'Revered',
		),
		array( // row #188
			'entry' => 19780,
			'required_reputation_value' => 'Honored',
		),
		array( // row #189
			'entry' => 19781,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #190
			'entry' => 20000,
			'required_reputation_value' => 'Honored',
		),
		array( // row #191
			'entry' => 20001,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #192
			'entry' => 20011,
			'required_reputation_value' => 'Revered',
		),
		array( // row #193
			'entry' => 20012,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #194
			'entry' => 20013,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #195
			'entry' => 20014,
			'required_reputation_value' => 'Honored',
		),
		array( // row #196
			'entry' => 20040,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #197
			'entry' => 20041,
			'required_reputation_value' => 'Honored',
		),
		array( // row #198
			'entry' => 20042,
			'required_reputation_value' => 'Honored',
		),
		array( // row #199
			'entry' => 20043,
			'required_reputation_value' => 'Honored',
		),
		array( // row #200
			'entry' => 20045,
			'required_reputation_value' => 'Honored',
		),
		array( // row #201
			'entry' => 20046,
			'required_reputation_value' => 'Honored',
		),
		array( // row #202
			'entry' => 20047,
			'required_reputation_value' => 'Honored',
		),
		array( // row #203
			'entry' => 20048,
			'required_reputation_value' => 'Revered',
		),
		array( // row #204
			'entry' => 20049,
			'required_reputation_value' => 'Revered',
		),
		array( // row #205
			'entry' => 20050,
			'required_reputation_value' => 'Revered',
		),
		array( // row #206
			'entry' => 20052,
			'required_reputation_value' => 'Revered',
		),
		array( // row #207
			'entry' => 20053,
			'required_reputation_value' => 'Revered',
		),
		array( // row #208
			'entry' => 20054,
			'required_reputation_value' => 'Revered',
		),
		array( // row #209
			'entry' => 20055,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #210
			'entry' => 20057,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #211
			'entry' => 20058,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #212
			'entry' => 20059,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #213
			'entry' => 20060,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #214
			'entry' => 20061,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #215
			'entry' => 20068,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #216
			'entry' => 20069,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #217
			'entry' => 20070,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #218
			'entry' => 20071,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #219
			'entry' => 20072,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #220
			'entry' => 20073,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #221
			'entry' => 20088,
			'required_reputation_value' => 'Honored',
		),
		array( // row #222
			'entry' => 20089,
			'required_reputation_value' => 'Honored',
		),
		array( // row #223
			'entry' => 20090,
			'required_reputation_value' => 'Honored',
		),
		array( // row #224
			'entry' => 20091,
			'required_reputation_value' => 'Revered',
		),
		array( // row #225
			'entry' => 20092,
			'required_reputation_value' => 'Revered',
		),
		array( // row #226
			'entry' => 20093,
			'required_reputation_value' => 'Revered',
		),
		array( // row #227
			'entry' => 20094,
			'required_reputation_value' => 'Revered',
		),
		array( // row #228
			'entry' => 20095,
			'required_reputation_value' => 'Revered',
		),
		array( // row #229
			'entry' => 20096,
			'required_reputation_value' => 'Revered',
		),
		array( // row #230
			'entry' => 20097,
			'required_reputation_value' => 'Honored',
		),
		array( // row #231
			'entry' => 20098,
			'required_reputation_value' => 'Honored',
		),
		array( // row #232
			'entry' => 20099,
			'required_reputation_value' => 'Honored',
		),
		array( // row #233
			'entry' => 20100,
			'required_reputation_value' => 'Revered',
		),
		array( // row #234
			'entry' => 20101,
			'required_reputation_value' => 'Revered',
		),
		array( // row #235
			'entry' => 20102,
			'required_reputation_value' => 'Revered',
		),
		array( // row #236
			'entry' => 20103,
			'required_reputation_value' => 'Honored',
		),
		array( // row #237
			'entry' => 20104,
			'required_reputation_value' => 'Honored',
		),
		array( // row #238
			'entry' => 20105,
			'required_reputation_value' => 'Honored',
		),
		array( // row #239
			'entry' => 20106,
			'required_reputation_value' => 'Honored',
		),
		array( // row #240
			'entry' => 20107,
			'required_reputation_value' => 'Honored',
		),
		array( // row #241
			'entry' => 20108,
			'required_reputation_value' => 'Honored',
		),
		array( // row #242
			'entry' => 20109,
			'required_reputation_value' => 'Revered',
		),
		array( // row #243
			'entry' => 20110,
			'required_reputation_value' => 'Revered',
		),
		array( // row #244
			'entry' => 20111,
			'required_reputation_value' => 'Revered',
		),
		array( // row #245
			'entry' => 20112,
			'required_reputation_value' => 'Revered',
		),
		array( // row #246
			'entry' => 20113,
			'required_reputation_value' => 'Revered',
		),
		array( // row #247
			'entry' => 20114,
			'required_reputation_value' => 'Revered',
		),
		array( // row #248
			'entry' => 20115,
			'required_reputation_value' => 'Honored',
		),
		array( // row #249
			'entry' => 20116,
			'required_reputation_value' => 'Honored',
		),
		array( // row #250
			'entry' => 20117,
			'required_reputation_value' => 'Honored',
		),
		array( // row #251
			'entry' => 20124,
			'required_reputation_value' => 'Honored',
		),
		array( // row #252
			'entry' => 20125,
			'required_reputation_value' => 'Honored',
		),
		array( // row #253
			'entry' => 20126,
			'required_reputation_value' => 'Honored',
		),
		array( // row #254
			'entry' => 20127,
			'required_reputation_value' => 'Revered',
		),
		array( // row #255
			'entry' => 20128,
			'required_reputation_value' => 'Revered',
		),
		array( // row #256
			'entry' => 20129,
			'required_reputation_value' => 'Revered',
		),
		array( // row #257
			'entry' => 20131,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #258
			'entry' => 20132,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #259
			'entry' => 20150,
			'required_reputation_value' => 'Honored',
		),
		array( // row #260
			'entry' => 20151,
			'required_reputation_value' => 'Honored',
		),
		array( // row #261
			'entry' => 20152,
			'required_reputation_value' => 'Honored',
		),
		array( // row #262
			'entry' => 20153,
			'required_reputation_value' => 'Honored',
		),
		array( // row #263
			'entry' => 20154,
			'required_reputation_value' => 'Revered',
		),
		array( // row #264
			'entry' => 20155,
			'required_reputation_value' => 'Revered',
		),
		array( // row #265
			'entry' => 20156,
			'required_reputation_value' => 'Revered',
		),
		array( // row #266
			'entry' => 20157,
			'required_reputation_value' => 'Revered',
		),
		array( // row #267
			'entry' => 20158,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #268
			'entry' => 20159,
			'required_reputation_value' => 'Revered',
		),
		array( // row #269
			'entry' => 20160,
			'required_reputation_value' => 'Revered',
		),
		array( // row #270
			'entry' => 20161,
			'required_reputation_value' => 'Revered',
		),
		array( // row #271
			'entry' => 20162,
			'required_reputation_value' => 'Revered',
		),
		array( // row #272
			'entry' => 20163,
			'required_reputation_value' => 'Honored',
		),
		array( // row #273
			'entry' => 20164,
			'required_reputation_value' => 'Honored',
		),
		array( // row #274
			'entry' => 20165,
			'required_reputation_value' => 'Honored',
		),
		array( // row #275
			'entry' => 20166,
			'required_reputation_value' => 'Honored',
		),
		array( // row #276
			'entry' => 20167,
			'required_reputation_value' => 'Revered',
		),
		array( // row #277
			'entry' => 20168,
			'required_reputation_value' => 'Revered',
		),
		array( // row #278
			'entry' => 20169,
			'required_reputation_value' => 'Revered',
		),
		array( // row #279
			'entry' => 20170,
			'required_reputation_value' => 'Revered',
		),
		array( // row #280
			'entry' => 20171,
			'required_reputation_value' => 'Honored',
		),
		array( // row #281
			'entry' => 20172,
			'required_reputation_value' => 'Honored',
		),
		array( // row #282
			'entry' => 20173,
			'required_reputation_value' => 'Honored',
		),
		array( // row #283
			'entry' => 20174,
			'required_reputation_value' => 'Honored',
		),
		array( // row #284
			'entry' => 20175,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #285
			'entry' => 20176,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #286
			'entry' => 20186,
			'required_reputation_value' => 'Revered',
		),
		array( // row #287
			'entry' => 20187,
			'required_reputation_value' => 'Revered',
		),
		array( // row #288
			'entry' => 20188,
			'required_reputation_value' => 'Revered',
		),
		array( // row #289
			'entry' => 20189,
			'required_reputation_value' => 'Revered',
		),
		array( // row #290
			'entry' => 20190,
			'required_reputation_value' => 'Honored',
		),
		array( // row #291
			'entry' => 20191,
			'required_reputation_value' => 'Honored',
		),
		array( // row #292
			'entry' => 20192,
			'required_reputation_value' => 'Honored',
		),
		array( // row #293
			'entry' => 20193,
			'required_reputation_value' => 'Honored',
		),
		array( // row #294
			'entry' => 20194,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #295
			'entry' => 20195,
			'required_reputation_value' => 'Honored',
		),
		array( // row #296
			'entry' => 20196,
			'required_reputation_value' => 'Honored',
		),
		array( // row #297
			'entry' => 20197,
			'required_reputation_value' => 'Honored',
		),
		array( // row #298
			'entry' => 20198,
			'required_reputation_value' => 'Honored',
		),
		array( // row #299
			'entry' => 20199,
			'required_reputation_value' => 'Revered',
		),
		array( // row #300
			'entry' => 20200,
			'required_reputation_value' => 'Revered',
		),
		array( // row #301
			'entry' => 20201,
			'required_reputation_value' => 'Revered',
		),
		array( // row #302
			'entry' => 20202,
			'required_reputation_value' => 'Revered',
		),
		array( // row #303
			'entry' => 20203,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #304
			'entry' => 20204,
			'required_reputation_value' => 'Honored',
		),
		array( // row #305
			'entry' => 20205,
			'required_reputation_value' => 'Honored',
		),
		array( // row #306
			'entry' => 20206,
			'required_reputation_value' => 'Honored',
		),
		array( // row #307
			'entry' => 20207,
			'required_reputation_value' => 'Honored',
		),
		array( // row #308
			'entry' => 20208,
			'required_reputation_value' => 'Revered',
		),
		array( // row #309
			'entry' => 20209,
			'required_reputation_value' => 'Revered',
		),
		array( // row #310
			'entry' => 20210,
			'required_reputation_value' => 'Revered',
		),
		array( // row #311
			'entry' => 20211,
			'required_reputation_value' => 'Revered',
		),
		array( // row #312
			'entry' => 20212,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #313
			'entry' => 20214,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #314
			'entry' => 20220,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #315
			'entry' => 20222,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #316
			'entry' => 20223,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #317
			'entry' => 20224,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #318
			'entry' => 20225,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #319
			'entry' => 20226,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #320
			'entry' => 20227,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #321
			'entry' => 20232,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #322
			'entry' => 20234,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #323
			'entry' => 20235,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #324
			'entry' => 20237,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #325
			'entry' => 20243,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #326
			'entry' => 20244,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #327
			'entry' => 20253,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #328
			'entry' => 20254,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #329
			'entry' => 20310,
			'required_reputation_value' => 'Neutral',
		),
		array( // row #330
			'entry' => 20382,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #331
			'entry' => 20425,
			'required_reputation_value' => 'Revered',
		),
		array( // row #332
			'entry' => 20426,
			'required_reputation_value' => 'Honored',
		),
		array( // row #333
			'entry' => 20427,
			'required_reputation_value' => 'Honored',
		),
		array( // row #334
			'entry' => 20428,
			'required_reputation_value' => 'Honored',
		),
		array( // row #335
			'entry' => 20429,
			'required_reputation_value' => 'Honored',
		),
		array( // row #336
			'entry' => 20430,
			'required_reputation_value' => 'Revered',
		),
		array( // row #337
			'entry' => 20431,
			'required_reputation_value' => 'Honored',
		),
		array( // row #338
			'entry' => 20434,
			'required_reputation_value' => 'Revered',
		),
		array( // row #339
			'entry' => 20437,
			'required_reputation_value' => 'Revered',
		),
		array( // row #340
			'entry' => 20438,
			'required_reputation_value' => 'Revered',
		),
		array( // row #341
			'entry' => 20439,
			'required_reputation_value' => 'Honored',
		),
		array( // row #342
			'entry' => 20440,
			'required_reputation_value' => 'Revered',
		),
		array( // row #343
			'entry' => 20441,
			'required_reputation_value' => 'Revered',
		),
		array( // row #344
			'entry' => 20442,
			'required_reputation_value' => 'Honored',
		),
		array( // row #345
			'entry' => 20443,
			'required_reputation_value' => 'Revered',
		),
		array( // row #346
			'entry' => 20444,
			'required_reputation_value' => 'Honored',
		),
		array( // row #347
			'entry' => 20506,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #348
			'entry' => 20507,
			'required_reputation_value' => 'Honored',
		),
		array( // row #349
			'entry' => 20508,
			'required_reputation_value' => 'Revered',
		),
		array( // row #350
			'entry' => 20509,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #351
			'entry' => 20510,
			'required_reputation_value' => 'Honored',
		),
		array( // row #352
			'entry' => 20511,
			'required_reputation_value' => 'Revered',
		),
		array( // row #353
			'entry' => 20732,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #354
			'entry' => 20733,
			'required_reputation_value' => 'Honored',
		),
		array( // row #355
			'entry' => 20756,
			'required_reputation_value' => 'Honored',
		),
		array( // row #356
			'entry' => 20757,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #357
			'entry' => 20761,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #358
			'entry' => 21115,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #359
			'entry' => 21116,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #360
			'entry' => 21117,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #361
			'entry' => 21118,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #362
			'entry' => 21119,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #363
			'entry' => 21120,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #364
			'entry' => 21196,
			'required_reputation_value' => 'Neutral',
		),
		array( // row #365
			'entry' => 21197,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #366
			'entry' => 21198,
			'required_reputation_value' => 'Honored',
		),
		array( // row #367
			'entry' => 21199,
			'required_reputation_value' => 'Revered',
		),
		array( // row #368
			'entry' => 21200,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #369
			'entry' => 21201,
			'required_reputation_value' => 'Neutral',
		),
		array( // row #370
			'entry' => 21202,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #371
			'entry' => 21203,
			'required_reputation_value' => 'Honored',
		),
		array( // row #372
			'entry' => 21204,
			'required_reputation_value' => 'Revered',
		),
		array( // row #373
			'entry' => 21205,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #374
			'entry' => 21206,
			'required_reputation_value' => 'Neutral',
		),
		array( // row #375
			'entry' => 21207,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #376
			'entry' => 21208,
			'required_reputation_value' => 'Honored',
		),
		array( // row #377
			'entry' => 21209,
			'required_reputation_value' => 'Revered',
		),
		array( // row #378
			'entry' => 21210,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #379
			'entry' => 21326,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #380
			'entry' => 21563,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #381
			'entry' => 21565,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #382
			'entry' => 21566,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #383
			'entry' => 21567,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #384
			'entry' => 21568,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #385
			'entry' => 22014,
			'required_reputation_value' => 'Honored',
		),
		array( // row #386
			'entry' => 22209,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #387
			'entry' => 22214,
			'required_reputation_value' => 'Honored',
		),
		array( // row #388
			'entry' => 22219,
			'required_reputation_value' => 'Revered',
		),
		array( // row #389
			'entry' => 22221,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #390
			'entry' => 22310,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #391
			'entry' => 22312,
			'required_reputation_value' => 'Revered',
		),
		array( // row #392
			'entry' => 22392,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #393
			'entry' => 22651,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #394
			'entry' => 22672,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #395
			'entry' => 22673,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #396
			'entry' => 22676,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #397
			'entry' => 22683,
			'required_reputation_value' => 'Revered',
		),
		array( // row #398
			'entry' => 22740,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #399
			'entry' => 22741,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #400
			'entry' => 22747,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #401
			'entry' => 22748,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #402
			'entry' => 22749,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #403
			'entry' => 22750,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #404
			'entry' => 22752,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #405
			'entry' => 22753,
			'required_reputation_value' => 'Exalted',
		),
		array( // row #406
			'entry' => 22766,
			'required_reputation_value' => 'Revered',
		),
		array( // row #407
			'entry' => 22767,
			'required_reputation_value' => 'Honored',
		),
		array( // row #408
			'entry' => 22768,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #409
			'entry' => 22769,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #410
			'entry' => 22770,
			'required_reputation_value' => 'Honored',
		),
		array( // row #411
			'entry' => 22771,
			'required_reputation_value' => 'Revered',
		),
		array( // row #412
			'entry' => 22772,
			'required_reputation_value' => 'Friendly',
		),
		array( // row #413
			'entry' => 22773,
			'required_reputation_value' => 'Honored',
		),
		array( // row #414
			'entry' => 22774,
			'required_reputation_value' => 'Revered',
		),
	);

		/*
		foreach($custom_items as $citem){
			
			$item = Item::where('entry',$citem['entry'])->first();
			$item->required_reputation_value = $citem['required_reputation_value'];
			$item->save();
			
			echo $item->slug . '<br/>';
			
		}
		*/
		
		$items = Item::orderBy('id', 'asc')->paginate(100);
		
		return view('items', [
			'items' => $items
		]);
		
	}
	
	public function item($slug){
		
		$item = Item::where('slug',$slug)->first();
		
		if(!$item){
			abort(404);
		}
		
		$item->allowed_class = $item->formatAllowedClasses();
		
		return view('item-view',[
			'item' => $item,
		]);
		
	}
	
}
