/*!
   SpryMedia Ltd.

 This source file is free software, available under the following license:
   MIT license - http://datatables.net/license/mit

 This source file is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.

 For details please refer to: http://www.datatables.net
 Scroller 2.0.7
 ©2011-2022 SpryMedia Ltd - datatables.net/license
*/
var $jscomp = $jscomp || {};
$jscomp.scope = {};
$jscomp.findInternal = function (c, f, g) {
	c instanceof String && (c = String(c));
	for (var h = c.length, l = 0; l < h; l++) {
		var m = c[l];
		if (f.call(g, m, l, c)) return { i: l, v: m };
	}
	return { i: -1, v: void 0 };
};
$jscomp.ASSUME_ES5 = !1;
$jscomp.ASSUME_NO_NATIVE_MAP = !1;
$jscomp.ASSUME_NO_NATIVE_SET = !1;
$jscomp.SIMPLE_FROUND_POLYFILL = !1;
$jscomp.ISOLATE_POLYFILLS = !1;
$jscomp.defineProperty =
	$jscomp.ASSUME_ES5 || "function" == typeof Object.defineProperties
		? Object.defineProperty
		: function (c, f, g) {
				if (c == Array.prototype || c == Object.prototype) return c;
				c[f] = g.value;
				return c;
		  };
$jscomp.getGlobal = function (c) {
	c = [
		"object" == typeof globalThis && globalThis,
		c,
		"object" == typeof window && window,
		"object" == typeof self && self,
		"object" == typeof global && global,
	];
	for (var f = 0; f < c.length; ++f) {
		var g = c[f];
		if (g && g.Math == Math) return g;
	}
	throw Error("Cannot find global object");
};
$jscomp.global = $jscomp.getGlobal(this);
$jscomp.IS_SYMBOL_NATIVE =
	"function" === typeof Symbol && "symbol" === typeof Symbol("x");
$jscomp.TRUST_ES6_POLYFILLS =
	!$jscomp.ISOLATE_POLYFILLS || $jscomp.IS_SYMBOL_NATIVE;
$jscomp.polyfills = {};
$jscomp.propertyToPolyfillSymbol = {};
$jscomp.POLYFILL_PREFIX = "$jscp$";
var $jscomp$lookupPolyfilledValue = function (c, f) {
	var g = $jscomp.propertyToPolyfillSymbol[f];
	if (null == g) return c[f];
	g = c[g];
	return void 0 !== g ? g : c[f];
};
$jscomp.polyfill = function (c, f, g, h) {
	f &&
		($jscomp.ISOLATE_POLYFILLS
			? $jscomp.polyfillIsolated(c, f, g, h)
			: $jscomp.polyfillUnisolated(c, f, g, h));
};
$jscomp.polyfillUnisolated = function (c, f, g, h) {
	g = $jscomp.global;
	c = c.split(".");
	for (h = 0; h < c.length - 1; h++) {
		var l = c[h];
		if (!(l in g)) return;
		g = g[l];
	}
	c = c[c.length - 1];
	h = g[c];
	f = f(h);
	f != h &&
		null != f &&
		$jscomp.defineProperty(g, c, { configurable: !0, writable: !0, value: f });
};
$jscomp.polyfillIsolated = function (c, f, g, h) {
	var l = c.split(".");
	c = 1 === l.length;
	h = l[0];
	h = !c && h in $jscomp.polyfills ? $jscomp.polyfills : $jscomp.global;
	for (var m = 0; m < l.length - 1; m++) {
		var q = l[m];
		if (!(q in h)) return;
		h = h[q];
	}
	l = l[l.length - 1];
	g = $jscomp.IS_SYMBOL_NATIVE && "es6" === g ? h[l] : null;
	f = f(g);
	null != f &&
		(c
			? $jscomp.defineProperty($jscomp.polyfills, l, {
					configurable: !0,
					writable: !0,
					value: f,
			  })
			: f !== g &&
			  (($jscomp.propertyToPolyfillSymbol[l] = $jscomp.IS_SYMBOL_NATIVE
					? $jscomp.global.Symbol(l)
					: $jscomp.POLYFILL_PREFIX + l),
			  (l = $jscomp.propertyToPolyfillSymbol[l]),
			  $jscomp.defineProperty(h, l, {
					configurable: !0,
					writable: !0,
					value: f,
			  })));
};
$jscomp.polyfill(
	"Array.prototype.find",
	function (c) {
		return c
			? c
			: function (f, g) {
					return $jscomp.findInternal(this, f, g).v;
			  };
	},
	"es6",
	"es3"
);
(function (c) {
	"function" === typeof define && define.amd
		? define(["jquery", "datatables.net"], function (f) {
				return c(f, window, document);
		  })
		: "object" === typeof exports
		? (module.exports = function (f, g) {
				f || (f = window);
				(g && g.fn.dataTable) || (g = require("datatables.net")(f, g).$);
				return c(g, f, f.document);
		  })
		: c(jQuery, window, document);
})(function (c, f, g, h) {
	var l = c.fn.dataTable,
		m = function (a, b) {
			this instanceof m
				? (b === h && (b = {}),
				  (a = c.fn.dataTable.Api(a)),
				  (this.s = {
						dt: a.settings()[0],
						dtApi: a,
						tableTop: 0,
						tableBottom: 0,
						redrawTop: 0,
						redrawBottom: 0,
						autoHeight: !0,
						viewportRows: 0,
						stateTO: null,
						stateSaveThrottle: function () {},
						drawTO: null,
						heights: {
							jump: null,
							page: null,
							virtual: null,
							scroll: null,
							row: null,
							viewport: null,
							labelHeight: 0,
							xbar: 0,
						},
						topRowFloat: 0,
						scrollDrawDiff: null,
						loaderVisible: !1,
						forceReposition: !1,
						baseRowTop: 0,
						baseScrollTop: 0,
						mousedown: !1,
						lastScrollTop: 0,
				  }),
				  (this.s = c.extend(this.s, m.oDefaults, b)),
				  (this.s.heights.row = this.s.rowHeight),
				  (this.dom = {
						force: g.createElement("div"),
						label: c('<div class="dts_label">0</div>'),
						scroller: null,
						table: null,
						loader: null,
				  }),
				  this.s.dt.oScroller ||
						((this.s.dt.oScroller = this), this.construct()))
				: alert(
						"Scroller warning: Scroller must be initialised with the 'new' keyword."
				  );
		};
	c.extend(m.prototype, {
		measure: function (a) {
			this.s.autoHeight && this._calcRowHeight();
			var b = this.s.heights;
			b.row &&
				((b.viewport = this._parseHeight(
					c(this.dom.scroller).css("max-height")
				)),
				(this.s.viewportRows = parseInt(b.viewport / b.row, 10) + 1),
				(this.s.dt._iDisplayLength =
					this.s.viewportRows * this.s.displayBuffer));
			var d = this.dom.label.outerHeight();
			b.xbar = this.dom.scroller.offsetHeight - this.dom.scroller.clientHeight;
			b.labelHeight = d;
			(a === h || a) && this.s.dt.oInstance.fnDraw(!1);
		},
		pageInfo: function () {
			var a = this.dom.scroller.scrollTop,
				b = this.s.dt.fnRecordsDisplay(),
				d = Math.ceil(
					this.pixelsToRow(a + this.s.heights.viewport, !1, this.s.ani)
				);
			return {
				start: Math.floor(this.pixelsToRow(a, !1, this.s.ani)),
				end: b < d ? b - 1 : d - 1,
			};
		},
		pixelsToRow: function (a, b, d) {
			a -= this.s.baseScrollTop;
			d = d
				? (this._domain("physicalToVirtual", this.s.baseScrollTop) + a) /
				  this.s.heights.row
				: a / this.s.heights.row + this.s.baseRowTop;
			return b || b === h ? parseInt(d, 10) : d;
		},
		rowToPixels: function (a, b, d) {
			a -= this.s.baseRowTop;
			d = d
				? this._domain("virtualToPhysical", this.s.baseScrollTop)
				: this.s.baseScrollTop;
			d += a * this.s.heights.row;
			return b || b === h ? parseInt(d, 10) : d;
		},
		scrollToRow: function (a, b) {
			var d = this,
				e = !1,
				k = this.rowToPixels(a),
				n = a - ((this.s.displayBuffer - 1) / 2) * this.s.viewportRows;
			0 > n && (n = 0);
			(k > this.s.redrawBottom || k < this.s.redrawTop) &&
				this.s.dt._iDisplayStart !== n &&
				((e = !0),
				(k = this._domain("virtualToPhysical", a * this.s.heights.row)),
				this.s.redrawTop < k &&
					k < this.s.redrawBottom &&
					((this.s.forceReposition = !0), (b = !1)));
			b === h || b
				? ((this.s.ani = e),
				  c(this.dom.scroller).animate({ scrollTop: k }, function () {
						setTimeout(function () {
							d.s.ani = !1;
						}, 250);
				  }))
				: c(this.dom.scroller).scrollTop(k);
		},
		construct: function () {
			var a = this,
				b = this.s.dtApi;
			if (this.s.dt.oFeatures.bPaginate) {
				this.dom.force.style.position = "relative";
				this.dom.force.style.top = "0px";
				this.dom.force.style.left = "0px";
				this.dom.force.style.width = "1px";
				this.dom.scroller = c(
					"div." + this.s.dt.oClasses.sScrollBody,
					this.s.dt.nTableWrapper
				)[0];
				this.dom.scroller.appendChild(this.dom.force);
				this.dom.scroller.style.position = "relative";
				this.dom.table = c(">table", this.dom.scroller)[0];
				this.dom.table.style.position = "absolute";
				this.dom.table.style.top = "0px";
				this.dom.table.style.left = "0px";
				c(b.table().container()).addClass("dts DTS");
				this.s.loadingIndicator &&
					((this.dom.loader = c(
						'<div class="dataTables_processing dts_loading">' +
							this.s.dt.oLanguage.sLoadingRecords +
							"</div>"
					).css("display", "none")),
					c(this.dom.scroller.parentNode)
						.css("position", "relative")
						.append(this.dom.loader));
				this.dom.label.appendTo(this.dom.scroller);
				this.s.heights.row &&
					"auto" != this.s.heights.row &&
					(this.s.autoHeight = !1);
				this.s.ingnoreScroll = !0;
				c(this.dom.scroller).on("scroll.dt-scroller", function (k) {
					a._scroll.call(a);
				});
				c(this.dom.scroller).on("touchstart.dt-scroller", function () {
					a._scroll.call(a);
				});
				c(this.dom.scroller)
					.on("mousedown.dt-scroller", function () {
						a.s.mousedown = !0;
					})
					.on("mouseup.dt-scroller", function () {
						a.s.labelVisible = !1;
						a.s.mousedown = !1;
						a.dom.label.css("display", "none");
					});
				c(f).on("resize.dt-scroller", function () {
					a.measure(!1);
					a._info();
				});
				var d = !0,
					e = b.state.loaded();
				b.on("stateSaveParams.scroller", function (k, n, p) {
					d && e
						? ((p.scroller = e.scroller),
						  (d = !1),
						  p.scroller && (a.s.lastScrollTop = p.scroller.scrollTop))
						: (p.scroller = {
								topRow: a.s.topRowFloat,
								baseScrollTop: a.s.baseScrollTop,
								baseRowTop: a.s.baseRowTop,
								scrollTop: a.s.lastScrollTop,
						  });
				});
				b.on("stateLoadParams.scroller", function (k, n, p) {
					p.scroller !== h && a.scrollToRow(p.scroller.topRow);
				});
				e &&
					e.scroller &&
					((this.s.topRowFloat = e.scroller.topRow),
					(this.s.baseScrollTop = e.scroller.baseScrollTop),
					(this.s.baseRowTop = e.scroller.baseRowTop));
				this.measure(!1);
				a.s.stateSaveThrottle = a.s.dt.oApi._fnThrottle(function () {
					a.s.dtApi.state.save();
				}, 500);
				b.on("init.scroller", function () {
					a.measure(!1);
					a.s.scrollType = "jump";
					a._draw();
					b.on("draw.scroller", function () {
						a._draw();
					});
				});
				b.on("preDraw.dt.scroller", function () {
					a._scrollForce();
				});
				b.on("destroy.scroller", function () {
					c(f).off("resize.dt-scroller");
					c(a.dom.scroller).off(".dt-scroller");
					c(a.s.dt.nTable).off(".scroller");
					c(a.s.dt.nTableWrapper).removeClass("DTS");
					c("div.DTS_Loading", a.dom.scroller.parentNode).remove();
					a.dom.table.style.position = "";
					a.dom.table.style.top = "";
					a.dom.table.style.left = "";
				});
			} else
				this.s.dt.oApi._fnLog(
					this.s.dt,
					0,
					"Pagination must be enabled for Scroller"
				);
		},
		_calcRowHeight: function () {
			var a = this.s.dt,
				b = a.nTable,
				d = b.cloneNode(!1),
				e = c("<tbody/>").appendTo(d),
				k = c(
					'<div class="' +
						a.oClasses.sWrapper +
						' DTS"><div class="' +
						a.oClasses.sScrollWrapper +
						'"><div class="' +
						a.oClasses.sScrollBody +
						'"></div></div></div>'
				);
			c("tbody tr:lt(4)", b).clone().appendTo(e);
			var n = c("tr", e).length;
			if (1 === n)
				e.prepend("<tr><td>&#160;</td></tr>"),
					e.append("<tr><td>&#160;</td></tr>");
			else for (; 3 > n; n++) e.append("<tr><td>&#160;</td></tr>");
			c("div." + a.oClasses.sScrollBody, k).append(d);
			a = this.s.dt.nHolding || b.parentNode;
			c(a).is(":visible") || (a = "body");
			k.find("input").removeAttr("name");
			k.appendTo(a);
			this.s.heights.row = c("tr", e).eq(1).outerHeight();
			k.remove();
		},
		_draw: function () {
			var a = this,
				b = this.s.heights,
				d = this.dom.scroller.scrollTop,
				e = c(this.s.dt.nTable).height(),
				k = this.s.dt._iDisplayStart,
				n = this.s.dt._iDisplayLength,
				p = this.s.dt.fnRecordsDisplay();
			this.s.skip = !0;
			(!this.s.dt.bSorted && !this.s.dt.bFiltered) ||
				0 !== k ||
				this.s.dt._drawHold ||
				(this.s.topRowFloat = 0);
			d =
				"jump" === this.s.scrollType
					? this._domain("virtualToPhysical", this.s.topRowFloat * b.row)
					: d;
			this.s.baseScrollTop = d;
			this.s.baseRowTop = this.s.topRowFloat;
			var r = d - (this.s.topRowFloat - k) * b.row;
			0 === k ? (r = 0) : k + n >= p && (r = b.scroll - e);
			this.dom.table.style.top = r + "px";
			this.s.tableTop = r;
			this.s.tableBottom = e + this.s.tableTop;
			e = (d - this.s.tableTop) * this.s.boundaryScale;
			this.s.redrawTop = d - e;
			this.s.redrawBottom =
				d + e > b.scroll - b.viewport - b.row
					? b.scroll - b.viewport - b.row
					: d + e;
			this.s.skip = !1;
			a.s.ingnoreScroll &&
				(this.s.dt.oFeatures.bStateSave &&
				null !== this.s.dt.oLoadedState &&
				"undefined" != typeof this.s.dt.oLoadedState.scroller
					? (((b =
							(!this.s.dt.sAjaxSource && !a.s.dt.ajax) ||
							this.s.dt.oFeatures.bServerSide
								? !1
								: !0) &&
							2 <= this.s.dt.iDraw) ||
							(!b && 1 <= this.s.dt.iDraw)) &&
					  setTimeout(function () {
							c(a.dom.scroller).scrollTop(
								a.s.dt.oLoadedState.scroller.scrollTop
							);
							setTimeout(function () {
								a.s.ingnoreScroll = !1;
							}, 0);
					  }, 0)
					: (a.s.ingnoreScroll = !1));
			this.s.dt.oFeatures.bInfo &&
				setTimeout(function () {
					a._info.call(a);
				}, 0);
			c(this.s.dt.nTable).triggerHandler("position.dts.dt", r);
			this.dom.loader &&
				this.s.loaderVisible &&
				(this.dom.loader.css("display", "none"), (this.s.loaderVisible = !1));
		},
		_domain: function (a, b) {
			var d = this.s.heights;
			if (d.virtual === d.scroll || 1e4 > b) return b;
			if ("virtualToPhysical" === a && b >= d.virtual - 1e4)
				return (a = d.virtual - b), d.scroll - a;
			if ("physicalToVirtual" === a && b >= d.scroll - 1e4)
				return (a = d.scroll - b), d.virtual - a;
			d = (d.virtual - 1e4 - 1e4) / (d.scroll - 1e4 - 1e4);
			var e = 1e4 - 1e4 * d;
			return "virtualToPhysical" === a ? (b - e) / d : d * b + e;
		},
		_info: function () {
			if (this.s.dt.oFeatures.bInfo) {
				var a = this.s.dt,
					b = a.oLanguage,
					d = this.dom.scroller.scrollTop,
					e = Math.floor(this.pixelsToRow(d, !1, this.s.ani) + 1),
					k = a.fnRecordsTotal(),
					n = a.fnRecordsDisplay();
				d = Math.ceil(
					this.pixelsToRow(d + this.s.heights.viewport, !1, this.s.ani)
				);
				d = n < d ? n : d;
				var p = a.fnFormatNumber(e),
					r = a.fnFormatNumber(d),
					t = a.fnFormatNumber(k),
					u = a.fnFormatNumber(n);
				p =
					0 === a.fnRecordsDisplay() &&
					a.fnRecordsDisplay() == a.fnRecordsTotal()
						? b.sInfoEmpty + b.sInfoPostFix
						: 0 === a.fnRecordsDisplay()
						? b.sInfoEmpty +
						  " " +
						  b.sInfoFiltered.replace("_MAX_", t) +
						  b.sInfoPostFix
						: a.fnRecordsDisplay() == a.fnRecordsTotal()
						? b.sInfo
								.replace("_START_", p)
								.replace("_END_", r)
								.replace("_MAX_", t)
								.replace("_TOTAL_", u) + b.sInfoPostFix
						: b.sInfo
								.replace("_START_", p)
								.replace("_END_", r)
								.replace("_MAX_", t)
								.replace("_TOTAL_", u) +
						  " " +
						  b.sInfoFiltered.replace(
								"_MAX_",
								a.fnFormatNumber(a.fnRecordsTotal())
						  ) +
						  b.sInfoPostFix;
				(b = b.fnInfoCallback) && (p = b.call(a.oInstance, a, e, d, k, n, p));
				e = a.aanFeatures.i;
				if ("undefined" != typeof e)
					for (k = 0, n = e.length; k < n; k++) c(e[k]).html(p);
				c(a.nTable).triggerHandler("info.dt");
			}
		},
		_parseHeight: function (a) {
			var b,
				d = /^([+-]?(?:\d+(?:\.\d+)?|\.\d+))(px|em|rem|vh)$/.exec(a);
			if (null === d) return 0;
			a = parseFloat(d[1]);
			d = d[2];
			"px" === d
				? (b = a)
				: "vh" === d
				? (b = (a / 100) * c(f).height())
				: "rem" === d
				? (b = a * parseFloat(c(":root").css("font-size")))
				: "em" === d && (b = a * parseFloat(c("body").css("font-size")));
			return b ? b : 0;
		},
		_scroll: function () {
			var a = this,
				b = this.s.heights,
				d = this.dom.scroller.scrollTop;
			if (!this.s.skip && !this.s.ingnoreScroll && d !== this.s.lastScrollTop)
				if (this.s.dt.bFiltered || this.s.dt.bSorted) this.s.lastScrollTop = 0;
				else {
					this._info();
					clearTimeout(this.s.stateTO);
					this.s.stateTO = setTimeout(function () {
						a.s.dtApi.state.save();
					}, 250);
					this.s.scrollType =
						Math.abs(d - this.s.lastScrollTop) > b.viewport ? "jump" : "cont";
					this.s.topRowFloat =
						"cont" === this.s.scrollType
							? this.pixelsToRow(d, !1, !1)
							: this._domain("physicalToVirtual", d) / b.row;
					0 > this.s.topRowFloat && (this.s.topRowFloat = 0);
					if (
						this.s.forceReposition ||
						d < this.s.redrawTop ||
						d > this.s.redrawBottom
					) {
						var e = Math.ceil(
							((this.s.displayBuffer - 1) / 2) * this.s.viewportRows
						);
						e = parseInt(this.s.topRowFloat, 10) - e;
						this.s.forceReposition = !1;
						0 >= e
							? (e = 0)
							: e + this.s.dt._iDisplayLength > this.s.dt.fnRecordsDisplay()
							? ((e = this.s.dt.fnRecordsDisplay() - this.s.dt._iDisplayLength),
							  0 > e && (e = 0))
							: 0 !== e % 2 && e++;
						this.s.targetTop = e;
						e != this.s.dt._iDisplayStart &&
							((this.s.tableTop = c(this.s.dt.nTable).offset().top),
							(this.s.tableBottom =
								c(this.s.dt.nTable).height() + this.s.tableTop),
							(e = function () {
								a.s.dt._iDisplayStart = a.s.targetTop;
								a.s.dt.oApi._fnDraw(a.s.dt);
							}),
							this.s.dt.oFeatures.bServerSide
								? ((this.s.forceReposition = !0),
								  clearTimeout(this.s.drawTO),
								  (this.s.drawTO = setTimeout(e, this.s.serverWait)))
								: e(),
							this.dom.loader &&
								!this.s.loaderVisible &&
								(this.dom.loader.css("display", "block"),
								(this.s.loaderVisible = !0)));
					} else this.s.topRowFloat = this.pixelsToRow(d, !1, !0);
					this.s.lastScrollTop = d;
					this.s.stateSaveThrottle();
					"jump" === this.s.scrollType &&
						this.s.mousedown &&
						(this.s.labelVisible = !0);
					this.s.labelVisible &&
						((b = (b.viewport - b.labelHeight - b.xbar) / b.scroll),
						this.dom.label
							.html(
								this.s.dt.fnFormatNumber(parseInt(this.s.topRowFloat, 10) + 1)
							)
							.css("top", d + d * b)
							.css("right", 10 - this.dom.scroller.scrollLeft)
							.css("display", "block"));
				}
		},
		_scrollForce: function () {
			var a = this.s.heights;
			a.virtual = a.row * this.s.dt.fnRecordsDisplay();
			a.scroll = a.virtual;
			1e6 < a.scroll && (a.scroll = 1e6);
			this.dom.force.style.height =
				a.scroll > this.s.heights.row
					? a.scroll + "px"
					: this.s.heights.row + "px";
		},
	});
	m.defaults = {
		boundaryScale: 0.5,
		displayBuffer: 9,
		loadingIndicator: !1,
		rowHeight: "auto",
		serverWait: 200,
	};
	m.oDefaults = m.defaults;
	m.version = "2.0.7";
	c(g).on("preInit.dt.dtscroller", function (a, b) {
		if ("dt" === a.namespace) {
			a = b.oInit.scroller;
			var d = l.defaults.scroller;
			if (a || d) (d = c.extend({}, a, d)), !1 !== a && new m(b, d);
		}
	});
	c.fn.dataTable.Scroller = m;
	c.fn.DataTable.Scroller = m;
	var q = c.fn.dataTable.Api;
	q.register("scroller()", function () {
		return this;
	});
	q.register("scroller().rowToPixels()", function (a, b, d) {
		var e = this.context;
		if (e.length && e[0].oScroller) return e[0].oScroller.rowToPixels(a, b, d);
	});
	q.register("scroller().pixelsToRow()", function (a, b, d) {
		var e = this.context;
		if (e.length && e[0].oScroller) return e[0].oScroller.pixelsToRow(a, b, d);
	});
	q.register(
		["scroller().scrollToRow()", "scroller.toPosition()"],
		function (a, b) {
			this.iterator("table", function (d) {
				d.oScroller && d.oScroller.scrollToRow(a, b);
			});
			return this;
		}
	);
	q.register("row().scrollTo()", function (a) {
		var b = this;
		this.iterator("row", function (d, e) {
			d.oScroller &&
				((e = b
					.rows({ order: "applied", search: "applied" })
					.indexes()
					.indexOf(e)),
				d.oScroller.scrollToRow(e, a));
		});
		return this;
	});
	q.register("scroller.measure()", function (a) {
		this.iterator("table", function (b) {
			b.oScroller && b.oScroller.measure(a);
		});
		return this;
	});
	q.register("scroller.page()", function () {
		var a = this.context;
		if (a.length && a[0].oScroller) return a[0].oScroller.pageInfo();
	});
	return m;
});
