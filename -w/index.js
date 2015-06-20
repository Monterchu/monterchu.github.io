function template(locals) {
var jade_debug = [ new jade.DebugItem( 1, "index.jade" ) ];
try {
var buf = [];
var jade_mixins = {};
var jade_interp;

jade_debug.unshift(new jade.DebugItem( 0, "index.jade" ));
jade_debug.unshift(new jade.DebugItem( 1, "index.jade" ));
buf.push("<!DOCTYPE html>");
jade_debug.shift();
jade_debug.unshift(new jade.DebugItem( 2, "index.jade" ));
buf.push("<html lang=\"es\">");
jade_debug.unshift(new jade.DebugItem( undefined, jade_debug[0].filename ));
jade_debug.shift();
buf.push("</html>");
jade_debug.shift();
jade_debug.unshift(new jade.DebugItem( 3, "index.jade" ));
buf.push("<head>");
jade_debug.unshift(new jade.DebugItem( undefined, jade_debug[0].filename ));
jade_debug.shift();
buf.push("</head>");
jade_debug.shift();
jade_debug.unshift(new jade.DebugItem( 4, "index.jade" ));
buf.push("<body>");
jade_debug.unshift(new jade.DebugItem( undefined, jade_debug[0].filename ));
jade_debug.shift();
buf.push("</body>");
jade_debug.shift();
jade_debug.shift();;return buf.join("");
} catch (err) {
  jade.rethrow(err, jade_debug[0].filename, jade_debug[0].lineno, "doctype html\nhtml(lang=\"es\")\nhead()\nbody()");
}
}