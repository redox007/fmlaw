frameworkShortcodeAtts={
	attributes:[
			{
                label:"How many Image to show?",
                id:"num",
                help:"This is how many Image will be displayed."
            },{
                label:"Corousel Number",
                id:"slidenum",
                help:"This is the number that will slide at a time."
            },
            {
                label:"Post Type",
                id:"type",
                controlType:"select-control", 
                selectValues:['team', 'after-before'],
                defaultValue: 'after-before', 
                defaultText: 'after-before',
                help:"Carousel Type."
            },
            {
                label:"Crousel Type",
                id:"ctype",
                controlType:"select-control", 
                selectValues:['carousel-one', 'carousel-two'],
                defaultValue: 'carousel-one', 
                defaultText: 'carousel-one',
                help:"Carousel Type."
            }
	],
	defaultContent:"",
	shortcode:"carousel"
};