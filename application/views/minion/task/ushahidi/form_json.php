{
	"name":"Classic Report Form",
	"type":"report",
	"description":"Classic Ushahidi 2.x Report Form",
	"groups":[
		{
			"label":"Incident Fields",
			"priority": 1,
			"attributes":[
				{
					"key":"original_id",
					"label":"Original ID",
					"type":"int",
					"input":"text",
					"required":false,
					"priority":0,
					"default":"",
					"options":{}
				},
				{
					"key":"date",
					"label":"Date",
					"type":"datetime",
					"input":"date",
					"required":true,
					"priority":0,
					"default":"",
					"options":{}
				},
				{
					"key":"location_name",
					"label":"Location Name",
					"type":"varchar",
					"input":"text",
					"required":true,
					"priority":1
				},
				{
					"key":"location",
					"label":"Location",
					"type":"geometry",
					"input":"text",
					"required":true,
					"priority":2
				},
				{
					"key":"verified",
					"label":"Verified",
					"type":"int",
					"input":"checkbox",
					"required":false,
					"priority":3
				},
				{
					"key":"source",
					"label":"Source",
					"type":"varchar",
					"input":"select",
					"required":false,
					"priority":4,
					"default":"Web",
					"options":[
						"Unknown",
						"Web",
						"SMS",
						"Email",
						"Twitter"
					]
				}
			]
		},
		{
			"label":"Media Fields",
			"priority": 2,
			"attributes":[
				{
					"key":"news",
					"label":"News",
					"type":"varchar",
					"input":"text",
					"required":false,
					"priority":0
				},
				{
					"key":"photo",
					"label":"Photo",
					"type":"varchar",
					"input":"file",
					"required":false,
					"priority":1
				},
				{
					"key":"video",
					"label":"Video",
					"type":"varchar",
					"input":"file",
					"required":false,
					"priority":2
				}
			]
		}
	]
}