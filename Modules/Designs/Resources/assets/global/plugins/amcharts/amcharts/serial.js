(function(){var e=window.AmCharts;e.AmSerialChart=e.Class({inherits:e.AmRectangularChart,construct:function(a){this.type="serial";e.AmSerialChart.base.construct.call(this,a);this.cname="AmSerialChart";this.theme=a;this.createEvents("changed");this.columnSpacing=5;this.columnSpacing3D=0;this.columnWidth=.8;this.updateScrollbar=!0;var b=new e.CategoryAxis(a);b.chart=this;this.categoryAxis=b;this.zoomOutOnDataUpdate=!0;this.mouseWheelZoomEnabled=this.mouseWheelScrollEnabled=this.rotate=this.skipZoom=
!1;this.minSelectedTime=0;e.applyTheme(this,a,this.cname)},initChart:function(){e.AmSerialChart.base.initChart.call(this);this.updateCategoryAxis(this.categoryAxis,this.rotate,"categoryAxis");this.dataChanged&&(this.updateData(),this.dataChanged=!1,this.dispatchDataUpdated=!0);var a=this.chartCursor;a&&a.updateData&&(a.updateData(),a.fullWidth&&(a.fullRectSet=this.cursorLineSet));var a=this.countColumns(),b=this.graphs,c;for(c=0;c<b.length;c++)b[c].columnCount=a;this.updateScrollbar=!0;this.drawChart();
this.autoMargins&&!this.marginsUpdated&&(this.marginsUpdated=!0,this.measureMargins())},handleWheelReal:function(a,b){if(!this.wheelBusy){var c=this.categoryAxis,d=c.parseDates,f=c.minDuration(),e=c=1;this.mouseWheelZoomEnabled?b||(c=-1):b&&(c=-1);var g=this.chartData.length,k=this.lastTime,m=this.firstTime;0>a?d?(g=this.endTime-this.startTime,d=this.startTime+c*f,f=this.endTime+e*f,0<e&&0<c&&f>=k&&(f=k,d=k-g),this.zoomToDates(new Date(d),new Date(f))):(0<e&&0<c&&this.end>=g-1&&(c=e=0),d=this.start+
c,f=this.end+e,this.zoomToIndexes(d,f)):d?(g=this.endTime-this.startTime,d=this.startTime-c*f,f=this.endTime-e*f,0<e&&0<c&&d<=m&&(d=m,f=m+g),this.zoomToDates(new Date(d),new Date(f))):(0<e&&0<c&&1>this.start&&(c=e=0),d=this.start-c,f=this.end-e,this.zoomToIndexes(d,f))}},validateData:function(a){this.marginsUpdated=!1;this.zoomOutOnDataUpdate&&!a&&(this.endTime=this.end=this.startTime=this.start=NaN);e.AmSerialChart.base.validateData.call(this)},drawChart:function(){if(0<this.realWidth&&0<this.realHeight){e.AmSerialChart.base.drawChart.call(this);
var a=this.chartData;if(e.ifArray(a)){var b=this.chartScrollbar;b&&b.draw();var a=a.length-1,c,b=this.categoryAxis;if(b.parseDates&&!b.equalSpacing){if(b=this.startTime,c=this.endTime,isNaN(b)||isNaN(c))b=this.firstTime,c=this.lastTime}else if(b=this.start,c=this.end,isNaN(b)||isNaN(c))b=0,c=a;this.endTime=this.startTime=this.end=this.start=void 0;this.zoom(b,c)}}else this.cleanChart();this.dispDUpd()},cleanChart:function(){e.callMethod("destroy",[this.valueAxes,this.graphs,this.categoryAxis,this.chartScrollbar,
this.chartCursor])},updateCategoryAxis:function(a,b,c){a.chart=this;a.id=c;a.rotate=b;a.axisRenderer=e.RecAxis;a.guideFillRenderer=e.RecFill;a.axisItemRenderer=e.RecItem;a.setOrientation(!this.rotate);a.x=this.marginLeftReal;a.y=this.marginTopReal;a.dx=this.dx;a.dy=this.dy;a.width=this.plotAreaWidth-1;a.height=this.plotAreaHeight-1;a.viW=this.plotAreaWidth-1;a.viH=this.plotAreaHeight-1;a.viX=this.marginLeftReal;a.viY=this.marginTopReal;a.marginsChanged=!0},updateValueAxes:function(){e.AmSerialChart.base.updateValueAxes.call(this);
var a=this.valueAxes,b;for(b=0;b<a.length;b++){var c=a[b],d=this.rotate;c.rotate=d;c.setOrientation(d);d=this.categoryAxis;if(!d.startOnAxis||d.parseDates)c.expandMinMax=!0}},updateData:function(){this.parseData();var a=this.graphs,b,c=this.chartData;for(b=0;b<a.length;b++)a[b].data=c;0<c.length&&(this.firstTime=this.getStartTime(c[0].time),this.lastTime=this.getEndTime(c[c.length-1].time))},getStartTime:function(a){var b=this.categoryAxis;return e.resetDateToMin(new Date(a),b.minPeriod,1,b.firstDayOfWeek).getTime()},
getEndTime:function(a){var b=e.extractPeriod(this.categoryAxis.minPeriod);return e.changeDate(new Date(a),b.period,b.count,!0).getTime()-1},updateMargins:function(){e.AmSerialChart.base.updateMargins.call(this);var a=this.chartScrollbar;a&&(this.getScrollbarPosition(a,this.rotate,this.categoryAxis.position),this.adjustMargins(a,this.rotate))},updateScrollbars:function(){e.AmSerialChart.base.updateScrollbars.call(this);this.updateChartScrollbar(this.chartScrollbar,this.rotate)},zoom:function(a,b){var c=
this.categoryAxis;c.parseDates&&!c.equalSpacing?this.timeZoom(a,b):this.indexZoom(a,b);this.updateLegendValues()},timeZoom:function(a,b){var c=this.maxSelectedTime;isNaN(c)||(b!=this.endTime&&b-a>c&&(a=b-c,this.updateScrollbar=!0),a!=this.startTime&&b-a>c&&(b=a+c,this.updateScrollbar=!0));var d=this.minSelectedTime;if(0<d&&b-a<d){var f=Math.round(a+(b-a)/2),d=Math.round(d/2);a=f-d;b=f+d}var h=this.chartData,f=this.categoryAxis;if(e.ifArray(h)&&(a!=this.startTime||b!=this.endTime)){var g=f.minDuration(),
d=this.firstTime,k=this.lastTime;a||(a=d,isNaN(c)||(a=k-c));b||(b=k);a>k&&(a=k);b<d&&(b=d);a<d&&(a=d);b>k&&(b=k);b<a&&(b=a+g);b-a<g/5&&(b<k?b=a+g/5:a=b-g/5);this.startTime=a;this.endTime=b;c=h.length-1;g=this.getClosestIndex(h,"time",a,!0,0,c);h=this.getClosestIndex(h,"time",b,!1,g,c);f.timeZoom(a,b);f.zoom(g,h);this.start=e.fitToBounds(g,0,c);this.end=e.fitToBounds(h,0,c);this.zoomAxesAndGraphs();this.zoomScrollbar();a!=d||b!=k?this.showZB(!0):this.showZB(!1);this.updateColumnsDepth();this.dispatchTimeZoomEvent()}},
updateAfterValueZoom:function(){this.zoomAxesAndGraphs();this.zoomScrollbar();this.updateColumnsDepth()},indexZoom:function(a,b){var c=this.maxSelectedSeries;isNaN(c)||(b!=this.end&&b-a>c&&(a=b-c,this.updateScrollbar=!0),a!=this.start&&b-a>c&&(b=a+c,this.updateScrollbar=!0));if(a!=this.start||b!=this.end){var d=this.chartData.length-1;isNaN(a)&&(a=0,isNaN(c)||(a=d-c));isNaN(b)&&(b=d);b<a&&(b=a);b>d&&(b=d);a>d&&(a=d-1);0>a&&(a=0);this.start=a;this.end=b;this.categoryAxis.zoom(a,b);this.zoomAxesAndGraphs();
this.zoomScrollbar();0!==a||b!=this.chartData.length-1?this.showZB(!0):this.showZB(!1);this.updateColumnsDepth();this.dispatchIndexZoomEvent()}},updateGraphs:function(){e.AmSerialChart.base.updateGraphs.call(this);var a=this.graphs,b;for(b=0;b<a.length;b++){var c=a[b];c.columnWidthReal=this.columnWidth;c.categoryAxis=this.categoryAxis;e.isString(c.fillToGraph)&&(c.fillToGraph=this.getGraphById(c.fillToGraph))}},updateColumnsDepth:function(){var a,b=this.graphs,c;e.remove(this.columnsSet);this.columnsArray=
[];for(a=0;a<b.length;a++){c=b[a];var d=c.columnsArray;if(d){var f;for(f=0;f<d.length;f++)this.columnsArray.push(d[f])}}this.columnsArray.sort(this.compareDepth);if(0<this.columnsArray.length){b=this.container.set();this.columnSet.push(b);for(a=0;a<this.columnsArray.length;a++)b.push(this.columnsArray[a].column.set);c&&b.translate(c.x,c.y);this.columnsSet=b}},compareDepth:function(a,b){return a.depth>b.depth?1:-1},zoomScrollbar:function(){var a=this.chartScrollbar,b=this.categoryAxis;a&&this.updateScrollbar&&
a.enabled&&a.dragger&&(a.dragger.stop(),b.parseDates&&!b.equalSpacing?a.timeZoom(this.startTime,this.endTime):a.zoom(this.start,this.end),this.updateScrollbar=!0)},updateTrendLines:function(){var a=this.trendLines,b;for(b=0;b<a.length;b++){var c=a[b],c=e.processObject(c,e.TrendLine,this.theme);a[b]=c;c.chart=this;c.id||(c.id="trendLineAuto"+b+"_"+(new Date).getTime());e.isString(c.valueAxis)&&(c.valueAxis=this.getValueAxisById(c.valueAxis));c.valueAxis||(c.valueAxis=this.valueAxes[0]);c.categoryAxis=
this.categoryAxis}},zoomAxesAndGraphs:function(){if(!this.scrollbarOnly){var a=this.valueAxes,b;for(b=0;b<a.length;b++)a[b].zoom(this.start,this.end);a=this.graphs;for(b=0;b<a.length;b++)a[b].zoom(this.start,this.end);this.zoomTrendLines();(b=this.chartCursor)&&b.zoom&&b.zoom(this.start,this.end,this.startTime,this.endTime)}},countColumns:function(){var a=0,b=this.valueAxes.length,c=this.graphs.length,d,e,h=!1,g,k;for(k=0;k<b;k++){e=this.valueAxes[k];var m=e.stackType;if("100%"==m||"regular"==m)for(h=
!1,g=0;g<c;g++)d=this.graphs[g],d.tcc=1,d.valueAxis==e&&"column"==d.type&&(!h&&d.stackable&&(a++,h=!0),(!d.stackable&&d.clustered||d.newStack)&&a++,d.columnIndex=a-1,d.clustered||(d.columnIndex=0));if("none"==m||"3d"==m){h=!1;for(g=0;g<c;g++)d=this.graphs[g],d.valueAxis==e&&"column"==d.type&&(d.clustered?(d.tcc=1,d.newStack&&(a=0),d.hidden||(d.columnIndex=a,a++)):d.hidden||(h=!0,d.tcc=1,d.columnIndex=0));h&&0===a&&(a=1)}if("3d"==m){e=1;for(k=0;k<c;k++)d=this.graphs[k],d.newStack&&e++,d.depthCount=
e,d.tcc=a;a=e}}return a},parseData:function(){e.AmSerialChart.base.parseData.call(this);this.parseSerialData(this.dataProvider)},getCategoryIndexByValue:function(a){var b=this.chartData,c,d;for(d=0;d<b.length;d++)b[d].category==a&&(c=d);return c},handleCursorChange:function(a){this.updateLegendValues(a.index)},handleCursorZoom:function(a){this.updateScrollbar=!0;this.zoom(a.start,a.end)},handleScrollbarZoom:function(a){this.updateScrollbar=!1;this.zoom(a.start,a.end)},dispatchTimeZoomEvent:function(){if(this.prevStartTime!=
this.startTime||this.prevEndTime!=this.endTime){var a={type:"zoomed"};a.startDate=new Date(this.startTime);a.endDate=new Date(this.endTime);a.startIndex=this.start;a.endIndex=this.end;this.startIndex=this.start;this.endIndex=this.end;this.startDate=a.startDate;this.endDate=a.endDate;this.prevStartTime=this.startTime;this.prevEndTime=this.endTime;var b=this.categoryAxis,c=e.extractPeriod(b.minPeriod).period,b=b.dateFormatsObject[c];a.startValue=e.formatDate(a.startDate,b,this);a.endValue=e.formatDate(a.endDate,
b,this);a.chart=this;a.target=this;this.fire(a.type,a)}},dispatchIndexZoomEvent:function(){if(this.prevStartIndex!=this.start||this.prevEndIndex!=this.end){this.startIndex=this.start;this.endIndex=this.end;var a=this.chartData;if(e.ifArray(a)&&!isNaN(this.start)&&!isNaN(this.end)){var b={chart:this,target:this,type:"zoomed"};b.startIndex=this.start;b.endIndex=this.end;b.startValue=a[this.start].category;b.endValue=a[this.end].category;this.categoryAxis.parseDates&&(this.startTime=a[this.start].time,
this.endTime=a[this.end].time,b.startDate=new Date(this.startTime),b.endDate=new Date(this.endTime));this.prevStartIndex=this.start;this.prevEndIndex=this.end;this.fire(b.type,b)}}},updateLegendValues:function(a){var b=this.graphs,c;for(c=0;c<b.length;c++){var d=b[c];isNaN(a)?d.currentDataItem=void 0:d.currentDataItem=this.chartData[a].axes[d.valueAxis.id].graphs[d.id]}this.legend&&this.legend.updateValues()},getClosestIndex:function(a,b,c,d,e,h){0>e&&(e=0);h>a.length-1&&(h=a.length-1);var g=e+Math.round((h-
e)/2),k=a[g][b];if(c==k)return g;if(1>=h-e){if(d)return e;d=a[h][b];return Math.abs(a[e][b]-c)<Math.abs(d-c)?e:h}return c==k?g:c<k?this.getClosestIndex(a,b,c,d,e,g):this.getClosestIndex(a,b,c,d,g,h)},zoomToIndexes:function(a,b){this.updateScrollbar=!0;var c=this.chartData;if(c){var d=c.length;0<d&&(0>a&&(a=0),b>d-1&&(b=d-1),d=this.categoryAxis,d.parseDates&&!d.equalSpacing?this.zoom(c[a].time,this.getEndTime(c[b].time)):this.zoom(a,b))}},zoomToDates:function(a,b){this.updateScrollbar=!0;var c=this.chartData;
if(this.categoryAxis.equalSpacing){var d=this.getClosestIndex(c,"time",a.getTime(),!0,0,c.length);b=e.resetDateToMin(b,this.categoryAxis.minPeriod,1);c=this.getClosestIndex(c,"time",b.getTime(),!1,0,c.length);this.zoom(d,c)}else this.zoom(a.getTime(),b.getTime())},zoomToCategoryValues:function(a,b){this.updateScrollbar=!0;this.zoom(this.getCategoryIndexByValue(a),this.getCategoryIndexByValue(b))},formatPeriodString:function(a,b){if(b){var c=["value","open","low","high","close"],d="value open low high close average sum count".split(" "),
f=b.valueAxis,h=this.chartData,g=b.numberFormatter;g||(g=this.nf);for(var k=0;k<c.length;k++){for(var m=c[k],l=0,p=0,q,n,x,y,w,r=0,t=0,A,v,u,B,C,I=this.start;I<=this.end;I++){var z=h[I];if(z&&(z=z.axes[f.id].graphs[b.id])){if(z.values){var D=z.values[m];if(this.rotate){if(0>z.x||z.x>z.graph.height)D=NaN}else if(0>z.x||z.x>z.graph.width)D=NaN;if(!isNaN(D)){isNaN(q)&&(q=D);n=D;if(isNaN(x)||x>D)x=D;if(isNaN(y)||y<D)y=D;w=e.getDecimals(l);var F=e.getDecimals(D),l=l+D,l=e.roundTo(l,Math.max(w,F));p++;
w=l/p}}if(z.percents&&(z=z.percents[m],!isNaN(z))){isNaN(A)&&(A=z);v=z;if(isNaN(u)||u>z)u=z;if(isNaN(B)||B<z)B=z;C=e.getDecimals(r);D=e.getDecimals(z);r+=z;r=e.roundTo(r,Math.max(C,D));t++;C=r/t}}}r={open:A,close:v,high:B,low:u,average:C,sum:r,count:t};a=e.formatValue(a,{open:q,close:n,high:y,low:x,average:w,sum:l,count:p},d,g,m+"\\.",this.usePrefixes,this.prefixesOfSmallNumbers,this.prefixesOfBigNumbers);a=e.formatValue(a,r,d,this.pf,"percents\\."+m+"\\.")}}return a=e.cleanFromEmpty(a)},formatString:function(a,
b,c){var d=b.graph;if(-1!=a.indexOf("[[category]]")){var f=b.serialDataItem.category;if(this.categoryAxis.parseDates){var h=this.balloonDateFormat,g=this.chartCursor;g&&(h=g.categoryBalloonDateFormat);-1!=a.indexOf("[[category]]")&&(h=e.formatDate(f,h,this),-1!=h.indexOf("fff")&&(h=e.formatMilliseconds(h,f)),f=h)}a=a.replace(/\[\[category\]\]/g,String(f))}f=d.numberFormatter;f||(f=this.nf);h=b.graph.valueAxis;(g=h.duration)&&!isNaN(b.values.value)&&(g=e.formatDuration(b.values.value,g,"",h.durationUnits,
h.maxInterval,f),a=a.replace(RegExp("\\[\\[value\\]\\]","g"),g));"date"==h.type&&(h=e.formatDate(new Date(b.values.value),d.dateFormat,this),g=RegExp("\\[\\[value\\]\\]","g"),a=a.replace(g,h),h=e.formatDate(new Date(b.values.open),d.dateFormat,this),g=RegExp("\\[\\[open\\]\\]","g"),a=a.replace(g,h));d="value open low high close total".split(" ");h=this.pf;a=e.formatValue(a,b.percents,d,h,"percents\\.");a=e.formatValue(a,b.values,d,f,"",this.usePrefixes,this.prefixesOfSmallNumbers,this.prefixesOfBigNumbers);
a=e.formatValue(a,b.values,["percents"],h);-1!=a.indexOf("[[")&&(a=e.formatDataContextValue(a,b.dataContext));-1!=a.indexOf("[[")&&b.graph.customData&&(a=e.formatDataContextValue(a,b.graph.customData));return a=e.AmSerialChart.base.formatString.call(this,a,b,c)},addChartScrollbar:function(a){e.callMethod("destroy",[this.chartScrollbar]);a&&(a.chart=this,this.listenTo(a,"zoomed",this.handleScrollbarZoom));this.rotate?void 0===a.width&&(a.width=a.scrollbarHeight):void 0===a.height&&(a.height=a.scrollbarHeight);
this.chartScrollbar=a},removeChartScrollbar:function(){e.callMethod("destroy",[this.chartScrollbar]);this.chartScrollbar=null},handleReleaseOutside:function(a){e.AmSerialChart.base.handleReleaseOutside.call(this,a);e.callMethod("handleReleaseOutside",[this.chartScrollbar])},update:function(){e.AmSerialChart.base.update.call(this);this.chartScrollbar&&this.chartScrollbar.update&&this.chartScrollbar.update()}})})();(function(){var e=window.AmCharts;e.Cuboid=e.Class({construct:function(a,b,c,d,e,h,g,k,m,l,p,q,n,x,y,w,r){this.set=a.set();this.container=a;this.h=Math.round(c);this.w=Math.round(b);this.dx=d;this.dy=e;this.colors=h;this.alpha=g;this.bwidth=k;this.bcolor=m;this.balpha=l;this.dashLength=x;this.topRadius=w;this.pattern=y;this.rotate=n;this.bcn=r;n?0>b&&0===p&&(p=180):0>c&&270==p&&(p=90);this.gradientRotation=p;0===d&&0===e&&(this.cornerRadius=q);this.draw()},draw:function(){var a=this.set;a.clear();
var b=this.container,c=b.chart,d=this.w,f=this.h,h=this.dx,g=this.dy,k=this.colors,m=this.alpha,l=this.bwidth,p=this.bcolor,q=this.balpha,n=this.gradientRotation,x=this.cornerRadius,y=this.dashLength,w=this.pattern,r=this.topRadius,t=this.bcn,A=k,v=k;"object"==typeof k&&(A=k[0],v=k[k.length-1]);var u,B,C,I,z,D,F,L,M,Q=m;w&&(m=0);var E,G,H,J,K=this.rotate;if(0<Math.abs(h)||0<Math.abs(g))if(isNaN(r))F=v,v=e.adjustLuminosity(A,-.2),v=e.adjustLuminosity(A,-.2),u=e.polygon(b,[0,h,d+h,d,0],[0,g,g,0,0],
v,m,1,p,0,n),0<q&&(M=e.line(b,[0,h,d+h],[0,g,g],p,q,l,y)),B=e.polygon(b,[0,0,d,d,0],[0,f,f,0,0],v,m,1,p,0,n),B.translate(h,g),0<q&&(C=e.line(b,[h,h],[g,g+f],p,q,l,y)),I=e.polygon(b,[0,0,h,h,0],[0,f,f+g,g,0],v,m,1,p,0,n),z=e.polygon(b,[d,d,d+h,d+h,d],[0,f,f+g,g,0],v,m,1,p,0,n),0<q&&(D=e.line(b,[d,d+h,d+h,d],[0,g,f+g,f],p,q,l,y)),v=e.adjustLuminosity(F,.2),F=e.polygon(b,[0,h,d+h,d,0],[f,f+g,f+g,f,f],v,m,1,p,0,n),0<q&&(L=e.line(b,[0,h,d+h],[f,f+g,f+g],p,q,l,y));else{var N,O,P;K?(N=f/2,v=h/2,P=f/2,O=
d+h/2,G=Math.abs(f/2),E=Math.abs(h/2)):(v=d/2,N=g/2,O=d/2,P=f+g/2+1,E=Math.abs(d/2),G=Math.abs(g/2));H=E*r;J=G*r;.1<E&&.1<E&&(u=e.circle(b,E,A,m,l,p,q,!1,G),u.translate(v,N));.1<H&&.1<H&&(F=e.circle(b,H,e.adjustLuminosity(A,.5),m,l,p,q,!1,J),F.translate(O,P))}m=Q;1>Math.abs(f)&&(f=0);1>Math.abs(d)&&(d=0);!isNaN(r)&&(0<Math.abs(h)||0<Math.abs(g))?(k=[A],k={fill:k,stroke:p,"stroke-width":l,"stroke-opacity":q,"fill-opacity":m},K?(m="M0,0 L"+d+","+(f/2-f/2*r),l=" B",0<d&&(l=" A"),e.VML?(m+=l+Math.round(d-
H)+","+Math.round(f/2-J)+","+Math.round(d+H)+","+Math.round(f/2+J)+","+d+",0,"+d+","+f,m=m+(" L0,"+f)+(l+Math.round(-E)+","+Math.round(f/2-G)+","+Math.round(E)+","+Math.round(f/2+G)+",0,"+f+",0,0")):(m+="A"+H+","+J+",0,0,0,"+d+","+(f-f/2*(1-r))+"L0,"+f,m+="A"+E+","+G+",0,0,1,0,0"),E=90):(l=d/2-d/2*r,m="M0,0 L"+l+","+f,e.VML?(m="M0,0 L"+l+","+f,l=" B",0>f&&(l=" A"),m+=l+Math.round(d/2-H)+","+Math.round(f-J)+","+Math.round(d/2+H)+","+Math.round(f+J)+",0,"+f+","+d+","+f,m+=" L"+d+",0",m+=l+Math.round(d/
2+E)+","+Math.round(G)+","+Math.round(d/2-E)+","+Math.round(-G)+","+d+",0,0,0"):(m+="A"+H+","+J+",0,0,0,"+(d-d/2*(1-r))+","+f+"L"+d+",0",m+="A"+E+","+G+",0,0,1,0,0"),E=180),b=b.path(m).attr(k),b.gradient("linearGradient",[A,e.adjustLuminosity(A,-.3),e.adjustLuminosity(A,-.3),A],E),K?b.translate(h/2,0):b.translate(0,g/2)):b=0===f?e.line(b,[0,d],[0,0],p,q,l,y):0===d?e.line(b,[0,0],[0,f],p,q,l,y):0<x?e.rect(b,d,f,k,m,l,p,q,x,n,y):e.polygon(b,[0,0,d,d,0],[0,f,f,0,0],k,m,l,p,q,n,!1,y);d=isNaN(r)?0>f?[u,
M,B,C,I,z,D,F,L,b]:[F,L,B,C,I,z,u,M,D,b]:K?0<d?[u,b,F]:[F,b,u]:0>f?[u,b,F]:[F,b,u];e.setCN(c,b,t+"front");e.setCN(c,B,t+"back");e.setCN(c,F,t+"top");e.setCN(c,u,t+"bottom");e.setCN(c,I,t+"left");e.setCN(c,z,t+"right");for(u=0;u<d.length;u++)if(B=d[u])a.push(B),e.setCN(c,B,t+"element");w&&b.pattern(w,NaN,c.path)},width:function(a){isNaN(a)&&(a=0);this.w=Math.round(a);this.draw()},height:function(a){isNaN(a)&&(a=0);this.h=Math.round(a);this.draw()},animateHeight:function(a,b){var c=this;c.easing=b;
c.totalFrames=Math.round(1E3*a/e.updateRate);c.rh=c.h;c.frame=0;c.height(1);setTimeout(function(){c.updateHeight.call(c)},e.updateRate)},updateHeight:function(){var a=this;a.frame++;var b=a.totalFrames;a.frame<=b&&(b=a.easing(0,a.frame,1,a.rh-1,b),a.height(b),setTimeout(function(){a.updateHeight.call(a)},e.updateRate))},animateWidth:function(a,b){var c=this;c.easing=b;c.totalFrames=Math.round(1E3*a/e.updateRate);c.rw=c.w;c.frame=0;c.width(1);setTimeout(function(){c.updateWidth.call(c)},e.updateRate)},
updateWidth:function(){var a=this;a.frame++;var b=a.totalFrames;a.frame<=b&&(b=a.easing(0,a.frame,1,a.rw-1,b),a.width(b),setTimeout(function(){a.updateWidth.call(a)},e.updateRate))}})})();(function(){var e=window.AmCharts;e.CategoryAxis=e.Class({inherits:e.AxisBase,construct:function(a){this.cname="CategoryAxis";e.CategoryAxis.base.construct.call(this,a);this.minPeriod="DD";this.equalSpacing=this.parseDates=!1;this.position="bottom";this.startOnAxis=!1;this.firstDayOfWeek=1;this.gridPosition="middle";this.markPeriodChange=this.boldPeriodBeginning=!0;this.safeDistance=30;this.centerLabelOnFullPeriod=!0;e.applyTheme(this,a,this.cname)},draw:function(){e.CategoryAxis.base.draw.call(this);
this.generateDFObject();var a=this.chart.chartData;this.data=a;this.labelRotationR=this.labelRotation;if(e.ifArray(a)){var b,c=this.chart;"scrollbar"!=this.id?(e.setCN(c,this.set,"category-axis"),e.setCN(c,this.labelsSet,"category-axis"),e.setCN(c,this.axisLine.axisSet,"category-axis")):this.bcn=this.id+"-";var d=this.start,f=this.labelFrequency,h=0,g=this.end-d+1,k=this.gridCountR,m=this.showFirstLabel,l=this.showLastLabel,p,q,n="",n=e.extractPeriod(this.minPeriod),x=e.getPeriodDuration(n.period,
n.count),y,w,r,t;y=this.rotate;p=this.firstDayOfWeek;q=this.boldPeriodBeginning;b=e.resetDateToMin(new Date(a[a.length-1].time+1.05*x),this.minPeriod,1,p).getTime();this.firstTime=c.firstTime;this.endTime>b&&(this.endTime=b);t=this.minorGridEnabled;var A=this.gridAlpha,v,u=0,B=0;if(this.widthField)for(b=0;b<this.data.length;b++)if(v=this.data[b]){var C=Number(this.data[b].dataContext[this.widthField]);isNaN(C)||(u+=C,v.widthValue=C)}if(this.parseDates&&!this.equalSpacing)this.lastTime=a[a.length-
1].time,this.maxTime=e.resetDateToMin(new Date(this.lastTime+1.05*x),this.minPeriod,1,p).getTime(),this.timeDifference=this.endTime-this.startTime,this.parseDatesDraw();else if(!this.parseDates){if(this.cellWidth=this.getStepWidth(g),g<k&&(k=g),h+=this.start,this.stepWidth=this.getStepWidth(g),0<k)for(k=Math.floor(g/k),g=this.chooseMinorFrequency(k),n=h,n/2==Math.round(n/2)&&n--,0>n&&(n=0),a=0,this.end-n+1>=this.autoRotateCount&&(this.labelRotationR=this.autoRotateAngle),b=n;b<=this.end+2;b++){q=
!1;0<=b&&b<this.data.length?(w=this.data[b],n=w.category,q=w.forceShow):n="";if(t&&!isNaN(g))if(b/g==Math.round(b/g)||q)b/k==Math.round(b/k)||q||(this.gridAlpha=this.minorGridAlpha,n=void 0);else continue;else if(b/k!=Math.round(b/k)&&!q)continue;p=this.getCoordinate(b-h);r=0;"start"==this.gridPosition&&(p-=this.cellWidth/2,r=this.cellWidth/2);q=!0;v=r;"start"==this.tickPosition&&(v=0,q=!1,r=0);if(b==d&&!m||b==this.end&&!l)n=void 0;Math.round(a/f)!=a/f&&(n=void 0);a++;C=this.cellWidth;y&&(C=NaN,this.ignoreAxisWidth||
!c.autoMargins)&&(C="right"==this.position?c.marginRight:c.marginLeft,C-=this.tickLength+10);this.labelFunction&&w&&(n=this.labelFunction(n,w,this));n=e.fixBrakes(n);x=!1;this.boldLabels&&(x=!0);b>this.end&&"start"==this.tickPosition&&(n=" ");this.rotate&&this.inside&&(r=-2);isNaN(w.widthValue)||(w.percentWidthValue=w.widthValue/u*100,C=this.rotate?this.height*w.widthValue/u:this.width*w.widthValue/u,p=B,B+=C,r=C/2);r=new this.axisItemRenderer(this,p,n,q,C,r,void 0,x,v,!1,w.labelColor,w.className);
r.serialDataItem=w;this.pushAxisItem(r);this.gridAlpha=A}}else if(this.parseDates&&this.equalSpacing){h=this.start;this.startTime=this.data[this.start].time;this.endTime=this.data[this.end].time;this.timeDifference=this.endTime-this.startTime;b=this.choosePeriod(0);f=b.period;y=b.count;b=e.getPeriodDuration(f,y);b<x&&(f=n.period,y=n.count,b=x);w=f;"WW"==w&&(w="DD");this.stepWidth=this.getStepWidth(g);k=Math.ceil(this.timeDifference/b)+1;x=e.resetDateToMin(new Date(this.startTime-b),f,y,p).getTime();
this.cellWidth=this.getStepWidth(g);n=Math.round(x/b);d=-1;n/2==Math.round(n/2)&&(d=-2,x-=b);n=this.start;n/2==Math.round(n/2)&&n--;0>n&&(n=0);A=this.end+2;A>=this.data.length&&(A=this.data.length);B=!1;B=!m;this.previousPos=-1E3;20<this.labelRotationR&&(this.safeDistance=5);a=n;if(this.data[n].time!=e.resetDateToMin(new Date(this.data[n].time),f,y,p).getTime())for(p=0,v=x,b=n;b<A;b++)g=this.data[b].time,this.checkPeriodChange(f,y,g,v)&&(p++,2<=p&&(a=b,b=A),v=g);t&&1<y&&(g=this.chooseMinorFrequency(y),
e.getPeriodDuration(f,g));if(0<this.gridCountR)for(b=n;b<A;b++)if(g=this.data[b].time,this.checkPeriodChange(f,y,g,x)&&b>=a){p=this.getCoordinate(b-this.start);t=!1;this.nextPeriod[w]&&(t=this.checkPeriodChange(this.nextPeriod[w],1,g,x,w));x=!1;t&&this.markPeriodChange?(t=this.dateFormatsObject[this.nextPeriod[w]],x=!0):t=this.dateFormatsObject[w];n=e.formatDate(new Date(g),t,c);if(b==d&&!m||b==k&&!l)n=" ";B?B=!1:(q||(x=!1),p-this.previousPos>this.safeDistance*Math.cos(this.labelRotationR*Math.PI/
180)&&(this.labelFunction&&(n=this.labelFunction(n,new Date(g),this,f,y,r)),this.boldLabels&&(x=!0),r=new this.axisItemRenderer(this,p,n,void 0,void 0,void 0,void 0,x),t=r.graphics(),this.pushAxisItem(r),t=t.getBBox().width,e.isModern||(t-=p),this.previousPos=p+t));r=x=g}}for(b=0;b<this.data.length;b++)if(v=this.data[b])m=this.parseDates&&!this.equalSpacing?Math.round((v.time-this.startTime)*this.stepWidth+this.cellWidth/2):this.getCoordinate(b-h),isNaN(v.widthValue)||(v.percentWidthValue=v.widthValue/
u*100,m=this.rotate?this.height*v.widthValue/u:this.width*v.widthValue/u),v.x[this.id]=m;m=this.guides.length;for(b=0;b<m;b++)l=this.guides[b],q=k=k=t=d=NaN,u=l.above,l.toCategory&&(k=c.getCategoryIndexByValue(l.toCategory),isNaN(k)||(d=this.getCoordinate(k-h),l.expand&&(d+=this.cellWidth/2),r=new this.axisItemRenderer(this,d,"",!0,NaN,NaN,l),this.pushAxisItem(r,u))),l.category&&(q=c.getCategoryIndexByValue(l.category),isNaN(q)||(t=this.getCoordinate(q-h),l.expand&&(t-=this.cellWidth/2),k=(d-t)/2,
r=new this.axisItemRenderer(this,t,l.label,!0,NaN,k,l),this.pushAxisItem(r,u))),q=c.dataDateFormat,l.toDate&&(l.toDate=e.getDate(l.toDate,q,this.minPeriod),this.equalSpacing?(k=c.getClosestIndex(this.data,"time",l.toDate.getTime(),!1,0,this.data.length-1),isNaN(k)||(d=this.getCoordinate(k-h))):d=(l.toDate.getTime()-this.startTime)*this.stepWidth,r=new this.axisItemRenderer(this,d,"",!0,NaN,NaN,l),this.pushAxisItem(r,u)),l.date&&(l.date=e.getDate(l.date,q,this.minPeriod),this.equalSpacing?(q=c.getClosestIndex(this.data,
"time",l.date.getTime(),!1,0,this.data.length-1),isNaN(q)||(t=this.getCoordinate(q-h))):t=(l.date.getTime()-this.startTime)*this.stepWidth,k=(d-t)/2,q=!0,l.toDate&&(q=!1),r="H"==this.orientation?new this.axisItemRenderer(this,t,l.label,q,2*k,NaN,l):new this.axisItemRenderer(this,t,l.label,!1,NaN,k,l),this.pushAxisItem(r,u)),(0<d||0<t)&&(d<this.width||t<this.width)&&(d=new this.guideFillRenderer(this,t,d,l),t=d.graphics(),this.pushAxisItem(d,u),l.graphics=t,t.index=b,l.balloonText&&this.addEventListeners(t,
l))}this.axisCreated=!0;c=this.x;h=this.y;this.set.translate(c,h);this.labelsSet.translate(c,h);this.labelsSet.show();this.positionTitle();(c=this.axisLine.set)&&c.toFront();c=this.getBBox().height;2<c-this.previousHeight&&this.autoWrap&&!this.parseDates&&(this.axisCreated=this.chart.marginsUpdated=!1);this.previousHeight=c},xToIndex:function(a){var b=this.data,c=this.chart,d=c.rotate,f=this.stepWidth;this.parseDates&&!this.equalSpacing?(a=this.startTime+Math.round(a/f)-this.minDuration()/2,c=c.getClosestIndex(b,
"time",a,!1,this.start,this.end+1)):(this.startOnAxis||(a-=f/2),c=this.start+Math.round(a/f));var c=e.fitToBounds(c,0,b.length-1),h;b[c]&&(h=b[c].x[this.id]);d?h>this.height+1&&c--:h>this.width+1&&c--;0>h&&c++;return c=e.fitToBounds(c,0,b.length-1)},dateToCoordinate:function(a){return this.parseDates&&!this.equalSpacing?(a.getTime()-this.startTime)*this.stepWidth:this.parseDates&&this.equalSpacing?(a=this.chart.getClosestIndex(this.data,"time",a.getTime(),!1,0,this.data.length-1),this.getCoordinate(a-
this.start)):NaN},categoryToCoordinate:function(a){return this.chart?(a=this.chart.getCategoryIndexByValue(a),this.getCoordinate(a-this.start)):NaN},coordinateToDate:function(a){return this.equalSpacing?(a=this.xToIndex(a),new Date(this.data[a].time)):new Date(this.startTime+a/this.stepWidth)},getCoordinate:function(a){a*=this.stepWidth;this.startOnAxis||(a+=this.stepWidth/2);return Math.round(a)}})})();