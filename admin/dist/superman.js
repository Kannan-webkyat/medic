(() => {
    "use strict";
    var t,
        e,
        n,
        o = {},
        r = {};
    function i(t) {
        var e = r[t];
        if (void 0 !== e) return e.exports;
        var n = (r[t] = { exports: {} });
        return o[t](n, n.exports, i), n.exports;
    }
    function a(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    function s(t, e, n) {
        return e && a(t.prototype, e), n && a(t, n), t;
    }
    function c() {
        return (c =
            Object.assign ||
            function (t) {
                for (var e = 1; e < arguments.length; e++) {
                    var n = arguments[e];
                    for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o]);
                }
                return t;
            }).apply(this, arguments);
    }
    function u(t, e) {
        (t.prototype = Object.create(e.prototype)), (t.prototype.constructor = t), (t.__proto__ = e);
    }
    function l(t) {
        return (l = Object.setPrototypeOf
            ? Object.getPrototypeOf
            : function (t) {
                  return t.__proto__ || Object.getPrototypeOf(t);
              })(t);
    }
    function d(t, e) {
        return (d =
            Object.setPrototypeOf ||
            function (t, e) {
                return (t.__proto__ = e), t;
            })(t, e);
    }
    function f(t, e, n) {
        return (f = (function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Date.prototype.toString.call(Reflect.construct(Date, [], function () {})), !0;
            } catch (t) {
                return !1;
            }
        })()
            ? Reflect.construct
            : function (t, e, n) {
                  var o = [null];
                  o.push.apply(o, e);
                  var r = new (Function.bind.apply(t, o))();
                  return n && d(r, n.prototype), r;
              }).apply(null, arguments);
    }
    function h(t) {
        var e = "function" == typeof Map ? new Map() : void 0;
        return (h = function (t) {
            if (null === t || -1 === Function.toString.call(t).indexOf("[native code]")) return t;
            if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function");
            if (void 0 !== e) {
                if (e.has(t)) return e.get(t);
                e.set(t, n);
            }
            function n() {
                return f(t, arguments, l(this).constructor);
            }
            return (
                (n.prototype = Object.create(t.prototype, {
                    constructor: { value: n, enumerable: !1, writable: !0, configurable: !0 },
                })),
                d(n, t)
            );
        })(t);
    }
    function p(t, e) {
        try {
            var n = t();
        } catch (t) {
            return e(t);
        }
        return n && n.then ? n.then(void 0, e) : n;
    }
    (i.m = o),
        (i.d = (t, e) => {
            for (var n in e) i.o(e, n) && !i.o(t, n) && Object.defineProperty(t, n, { enumerable: !0, get: e[n] });
        }),
        (i.f = {}),
        (i.e = (t) => Promise.all(Object.keys(i.f).reduce((e, n) => (i.f[n](t, e), e), []))),
        (i.u = (t) => t + ".superman.js"),
        (i.o = (t, e) => Object.prototype.hasOwnProperty.call(t, e)),
        (t = {}),
        (e = "shreyas_app:"),
        (i.l = (n, o, r, a) => {
            if (t[n]) t[n].push(o);
            else {
                var s, c;
                if (void 0 !== r)
                    for (var u = document.getElementsByTagName("script"), l = 0; l < u.length; l++) {
                        var d = u[l];
                        if (d.getAttribute("src") == n || d.getAttribute("data-webpack") == e + r) {
                            s = d;
                            break;
                        }
                    }
                s ||
                    ((c = !0),
                    ((s = document.createElement("script")).charset = "utf-8"),
                    (s.timeout = 120),
                    i.nc && s.setAttribute("nonce", i.nc),
                    s.setAttribute("data-webpack", e + r),
                    (s.src = n)),
                    (t[n] = [o]);
                var f = (e, o) => {
                        (s.onerror = s.onload = null), clearTimeout(h);
                        var r = t[n];
                        if ((delete t[n], s.parentNode && s.parentNode.removeChild(s), r && r.forEach((t) => t(o)), e))
                            return e(o);
                    },
                    h = setTimeout(f.bind(null, void 0, { type: "timeout", target: s }), 12e4);
                (s.onerror = f.bind(null, s.onerror)),
                    (s.onload = f.bind(null, s.onload)),
                    c && document.head.appendChild(s);
            }
        }),
        (i.r = (t) => {
            "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }),
                Object.defineProperty(t, "__esModule", { value: !0 });
        }),
        (i.p = "http://localhost/medic/dist/"),
        (() => {
            var t = { 179: 0 };
            i.f.j = (e, n) => {
                var o = i.o(t, e) ? t[e] : void 0;
                if (0 !== o)
                    if (o) n.push(o[2]);
                    else {
                        var r = new Promise((n, r) => (o = t[e] = [n, r]));
                        n.push((o[2] = r));
                        var a = i.p + i.u(e),
                            s = new Error();
                        i.l(
                            a,
                            (n) => {
                                if (i.o(t, e) && (0 !== (o = t[e]) && (t[e] = void 0), o)) {
                                    var r = n && ("load" === n.type ? "missing" : n.type),
                                        a = n && n.target && n.target.src;
                                    (s.message = "Loading chunk " + e + " failed.\n(" + r + ": " + a + ")"),
                                        (s.name = "ChunkLoadError"),
                                        (s.type = r),
                                        (s.request = a),
                                        o[1](s);
                                }
                            },
                            "chunk-" + e,
                            e
                        );
                    }
            };
            var e = (e, n) => {
                    var o,
                        r,
                        [a, s, c] = n,
                        u = 0;
                    if (a.some((e) => 0 !== t[e])) {
                        for (o in s) i.o(s, o) && (i.m[o] = s[o]);
                        c && c(i);
                    }
                    for (e && e(n); u < a.length; u++) (r = a[u]), i.o(t, r) && t[r] && t[r][0](), (t[a[u]] = 0);
                },
                n = (self.webpackChunkshreyas_app = self.webpackChunkshreyas_app || []);
            n.forEach(e.bind(null, 0)), (n.push = e.bind(null, n.push.bind(n)));
        })(),
        "undefined" != typeof Symbol && (Symbol.iterator || (Symbol.iterator = Symbol("Symbol.iterator"))),
        "undefined" != typeof Symbol && (Symbol.asyncIterator || (Symbol.asyncIterator = Symbol("Symbol.asyncIterator"))),
        (function (t) {
            (t[(t.off = 0)] = "off"),
                (t[(t.error = 1)] = "error"),
                (t[(t.warning = 2)] = "warning"),
                (t[(t.info = 3)] = "info"),
                (t[(t.debug = 4)] = "debug");
        })(n || (n = {}));
    var v = n.off,
        m = (function () {
            function t(t) {
                this.t = t;
            }
            (t.getLevel = function () {
                return v;
            }),
                (t.setLevel = function (t) {
                    return (v = n[t]);
                });
            var e = t.prototype;
            return (
                (e.error = function () {
                    for (var t = arguments.length, e = new Array(t), o = 0; o < t; o++) e[o] = arguments[o];
                    this.i(console.error, n.error, e);
                }),
                (e.warn = function () {
                    for (var t = arguments.length, e = new Array(t), o = 0; o < t; o++) e[o] = arguments[o];
                    this.i(console.warn, n.warning, e);
                }),
                (e.info = function () {
                    for (var t = arguments.length, e = new Array(t), o = 0; o < t; o++) e[o] = arguments[o];
                    this.i(console.info, n.info, e);
                }),
                (e.debug = function () {
                    for (var t = arguments.length, e = new Array(t), o = 0; o < t; o++) e[o] = arguments[o];
                    this.i(console.log, n.debug, e);
                }),
                (e.i = function (e, n, o) {
                    n <= t.getLevel() && e.apply(console, ["[" + this.t + "] "].concat(o));
                }),
                t
            );
        })(),
        g = T,
        b = x,
        y = j,
        w = A,
        k = C,
        _ = new RegExp(
            ["(\\\\.)", "(?:\\:(\\w+)(?:\\(((?:\\\\.|[^\\\\()])+)\\))?|\\(((?:\\\\.|[^\\\\()])+)\\))([+*?])?"].join("|"),
            "g"
        );
    function j(t, e) {
        for (
            var n, o = [], r = 0, i = 0, a = "", s = (e && e.delimiter) || "/", c = (e && e.whitelist) || void 0, u = !1;
            null !== (n = _.exec(t));

        ) {
            var l = n[0],
                d = n[1],
                f = n.index;
            if (((a += t.slice(i, f)), (i = f + l.length), d)) (a += d[1]), (u = !0);
            else {
                var h = "",
                    p = n[2],
                    v = n[3],
                    m = n[4],
                    g = n[5];
                if (!u && a.length) {
                    var b = a.length - 1,
                        y = a[b];
                    (!c || c.indexOf(y) > -1) && ((h = y), (a = a.slice(0, b)));
                }
                a && (o.push(a), (a = ""), (u = !1));
                var w = v || m,
                    $ = h || s;
                o.push({
                    name: p || r++,
                    prefix: h,
                    delimiter: $,
                    optional: "?" === g || "*" === g,
                    repeat: "+" === g || "*" === g,
                    pattern: w ? S(w) : "[^" + E($ === s ? $ : $ + s) + "]+?",
                });
            }
        }
        return (a || i < t.length) && o.push(a + t.substr(i)), o;
    }
    function x(t, e) {
        return function (n, o) {
            var r = t.exec(n);
            if (!r) return !1;
            for (var i = r[0], a = r.index, s = {}, c = (o && o.decode) || decodeURIComponent, u = 1; u < r.length; u++)
                if (void 0 !== r[u]) {
                    var l = e[u - 1];
                    s[l.name] = l.repeat
                        ? r[u].split(l.delimiter).map(function (t) {
                              return c(t, l);
                          })
                        : c(r[u], l);
                }
            return { path: i, index: a, params: s };
        };
    }
    function A(t, e) {
        for (var n = new Array(t.length), o = 0; o < t.length; o++)
            "object" == typeof t[o] && (n[o] = new RegExp("^(?:" + t[o].pattern + ")$", P(e)));
        return function (e, o) {
            for (
                var r = "", i = (o && o.encode) || encodeURIComponent, a = !o || !1 !== o.validate, s = 0;
                s < t.length;
                s++
            ) {
                var c = t[s];
                if ("string" != typeof c) {
                    var u,
                        l = e ? e[c.name] : void 0;
                    if (Array.isArray(l)) {
                        if (!c.repeat) throw new TypeError('Expected "' + c.name + '" to not repeat, but got array');
                        if (0 === l.length) {
                            if (c.optional) continue;
                            throw new TypeError('Expected "' + c.name + '" to not be empty');
                        }
                        for (var d = 0; d < l.length; d++) {
                            if (((u = i(l[d], c)), a && !n[s].test(u)))
                                throw new TypeError('Expected all "' + c.name + '" to match "' + c.pattern + '"');
                            r += (0 === d ? c.prefix : c.delimiter) + u;
                        }
                    } else if ("string" != typeof l && "number" != typeof l && "boolean" != typeof l) {
                        if (!c.optional)
                            throw new TypeError('Expected "' + c.name + '" to be ' + (c.repeat ? "an array" : "a string"));
                    } else {
                        if (((u = i(String(l), c)), a && !n[s].test(u)))
                            throw new TypeError(
                                'Expected "' + c.name + '" to match "' + c.pattern + '", but got "' + u + '"'
                            );
                        r += c.prefix + u;
                    }
                } else r += c;
            }
            return r;
        };
    }
    function E(t) {
        return t.replace(/([.+*?=^!:${}()[\]|/\\])/g, "\\$1");
    }
    function S(t) {
        return t.replace(/([=!:$/()])/g, "\\$1");
    }
    function P(t) {
        return t && t.sensitive ? "" : "i";
    }
    function C(t, e, n) {
        for (
            var o = (n = n || {}).strict,
                r = !1 !== n.start,
                i = !1 !== n.end,
                a = n.delimiter || "/",
                s = []
                    .concat(n.endsWith || [])
                    .map(E)
                    .concat("$")
                    .join("|"),
                c = r ? "^" : "",
                u = 0;
            u < t.length;
            u++
        ) {
            var l = t[u];
            if ("string" == typeof l) c += E(l);
            else {
                var d = l.repeat ? "(?:" + l.pattern + ")(?:" + E(l.delimiter) + "(?:" + l.pattern + "))*" : l.pattern;
                e && e.push(l),
                    (c += l.optional
                        ? l.prefix
                            ? "(?:" + E(l.prefix) + "(" + d + "))?"
                            : "(" + d + ")?"
                        : E(l.prefix) + "(" + d + ")");
            }
        }
        if (i) o || (c += "(?:" + E(a) + ")?"), (c += "$" === s ? "$" : "(?=" + s + ")");
        else {
            var f = t[t.length - 1],
                h = "string" == typeof f ? f[f.length - 1] === a : void 0 === f;
            o || (c += "(?:" + E(a) + "(?=" + s + "))?"), h || (c += "(?=" + E(a) + "|" + s + ")");
        }
        return new RegExp(c, P(n));
    }
    function T(t, e, n) {
        return t instanceof RegExp
            ? (function (t, e) {
                  if (!e) return t;
                  var n = t.source.match(/\((?!\?)/g);
                  if (n)
                      for (var o = 0; o < n.length; o++)
                          e.push({ name: o, prefix: null, delimiter: null, optional: !1, repeat: !1, pattern: null });
                  return t;
              })(t, e)
            : Array.isArray(t)
            ? (function (t, e, n) {
                  for (var o = [], r = 0; r < t.length; r++) o.push(T(t[r], e, n).source);
                  return new RegExp("(?:" + o.join("|") + ")", P(n));
              })(t, e, n)
            : (function (t, e, n) {
                  return C(j(t, n), e, n);
              })(t, e, n);
    }
    (g.match = function (t, e) {
        var n = [];
        return x(T(t, n, e), n);
    }),
        (g.regexpToFunction = b),
        (g.parse = y),
        (g.compile = function (t, e) {
            return A(j(t, e), e);
        }),
        (g.tokensToFunction = w),
        (g.tokensToRegExp = k);
    var L = {
            container: "container",
            history: "history",
            namespace: "namespace",
            prefix: "data-barba",
            prevent: "prevent",
            wrapper: "wrapper",
        },
        R = new ((function () {
            function t() {
                (this.o = L), (this.u = new DOMParser());
            }
            var e = t.prototype;
            return (
                (e.toString = function (t) {
                    return t.outerHTML;
                }),
                (e.toDocument = function (t) {
                    return this.u.parseFromString(t, "text/html");
                }),
                (e.toElement = function (t) {
                    var e = document.createElement("div");
                    return (e.innerHTML = t), e;
                }),
                (e.getHtml = function (t) {
                    return void 0 === t && (t = document), this.toString(t.documentElement);
                }),
                (e.getWrapper = function (t) {
                    return (
                        void 0 === t && (t = document), t.querySelector("[" + this.o.prefix + '="' + this.o.wrapper + '"]')
                    );
                }),
                (e.getContainer = function (t) {
                    return (
                        void 0 === t && (t = document),
                        t.querySelector("[" + this.o.prefix + '="' + this.o.container + '"]')
                    );
                }),
                (e.removeContainer = function (t) {
                    document.body.contains(t) && t.parentNode.removeChild(t);
                }),
                (e.addContainer = function (t, e) {
                    var n = this.getContainer();
                    n ? this.s(t, n) : e.appendChild(t);
                }),
                (e.getNamespace = function (t) {
                    void 0 === t && (t = document);
                    var e = t.querySelector("[" + this.o.prefix + "-" + this.o.namespace + "]");
                    return e ? e.getAttribute(this.o.prefix + "-" + this.o.namespace) : null;
                }),
                (e.getHref = function (t) {
                    if (t.tagName && "a" === t.tagName.toLowerCase()) {
                        if ("string" == typeof t.href) return t.href;
                        var e = t.getAttribute("href") || t.getAttribute("xlink:href");
                        if (e) return this.resolveUrl(e.baseVal || e);
                    }
                    return null;
                }),
                (e.resolveUrl = function () {
                    for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
                    var o = e.length;
                    if (0 === o) throw new Error("resolveUrl requires at least one argument; got none.");
                    var r = document.createElement("base");
                    if (((r.href = arguments[0]), 1 === o)) return r.href;
                    var i = document.getElementsByTagName("head")[0];
                    i.insertBefore(r, i.firstChild);
                    for (var a, s = document.createElement("a"), c = 1; c < o; c++)
                        (s.href = arguments[c]), (r.href = a = s.href);
                    return i.removeChild(r), a;
                }),
                (e.s = function (t, e) {
                    e.parentNode.insertBefore(t, e.nextSibling);
                }),
                t
            );
        })())(),
        D = new ((function () {
            function t() {
                (this.h = []), (this.v = -1);
            }
            var e = t.prototype;
            return (
                (e.init = function (t, e) {
                    this.l = "barba";
                    var n = { ns: e, scroll: { x: window.scrollX, y: window.scrollY }, url: t };
                    this.h.push(n), (this.v = 0);
                    var o = { from: this.l, index: 0, states: [].concat(this.h) };
                    window.history && window.history.replaceState(o, "", t);
                }),
                (e.change = function (t, e, n) {
                    if (n && n.state) {
                        var o = n.state,
                            r = o.index;
                        (e = this.m(this.v - r)), this.replace(o.states), (this.v = r);
                    } else this.add(t, e);
                    return e;
                }),
                (e.add = function (t, e) {
                    var n = this.size,
                        o = this.p(e),
                        r = { ns: "tmp", scroll: { x: window.scrollX, y: window.scrollY }, url: t };
                    this.h.push(r), (this.v = n);
                    var i = { from: this.l, index: n, states: [].concat(this.h) };
                    switch (o) {
                        case "push":
                            window.history && window.history.pushState(i, "", t);
                            break;
                        case "replace":
                            window.history && window.history.replaceState(i, "", t);
                    }
                }),
                (e.update = function (t, e) {
                    var n = e || this.v,
                        o = c({}, this.get(n), {}, t);
                    this.set(n, o);
                }),
                (e.remove = function (t) {
                    t ? this.h.splice(t, 1) : this.h.pop(), this.v--;
                }),
                (e.clear = function () {
                    (this.h = []), (this.v = -1);
                }),
                (e.replace = function (t) {
                    this.h = t;
                }),
                (e.get = function (t) {
                    return this.h[t];
                }),
                (e.set = function (t, e) {
                    return (this.h[t] = e);
                }),
                (e.p = function (t) {
                    var e = "push",
                        n = t,
                        o = L.prefix + "-" + L.history;
                    return n.hasAttribute && n.hasAttribute(o) && (e = n.getAttribute(o)), e;
                }),
                (e.m = function (t) {
                    return Math.abs(t) > 1
                        ? t > 0
                            ? "forward"
                            : "back"
                        : 0 === t
                        ? "popstate"
                        : t > 0
                        ? "back"
                        : "forward";
                }),
                s(t, [
                    {
                        key: "current",
                        get: function () {
                            return this.h[this.v];
                        },
                    },
                    {
                        key: "state",
                        get: function () {
                            return this.h[this.h.length - 1];
                        },
                    },
                    {
                        key: "previous",
                        get: function () {
                            return this.v < 1 ? null : this.h[this.v - 1];
                        },
                    },
                    {
                        key: "size",
                        get: function () {
                            return this.h.length;
                        },
                    },
                ]),
                t
            );
        })())(),
        N = function (t, e) {
            try {
                var n = (function () {
                    if (!e.next.html)
                        return Promise.resolve(t).then(function (t) {
                            var n = e.next;
                            if (t) {
                                var o = R.toElement(t);
                                (n.namespace = R.getNamespace(o)),
                                    (n.container = R.getContainer(o)),
                                    (n.html = t),
                                    D.update({ ns: n.namespace });
                                var r = R.toDocument(t);
                                document.title = r.title;
                            }
                        });
                })();
                return Promise.resolve(n && n.then ? n.then(function () {}) : void 0);
            } catch (t) {
                return Promise.reject(t);
            }
        },
        O = g,
        I = {
            __proto__: null,
            update: N,
            nextTick: function () {
                return new Promise(function (t) {
                    window.requestAnimationFrame(t);
                });
            },
            pathToRegexp: O,
        },
        M = function () {
            return window.location.origin;
        },
        H = function (t) {
            return void 0 === t && (t = window.location.href), U(t).port;
        },
        U = function (t) {
            var e,
                n = t.match(/:\d+/);
            if (null === n) /^http/.test(t) && (e = 80), /^https/.test(t) && (e = 443);
            else {
                var o = n[0].substring(1);
                e = parseInt(o, 10);
            }
            var r,
                i = t.replace(M(), ""),
                a = {},
                s = i.indexOf("#");
            s >= 0 && ((r = i.slice(s + 1)), (i = i.slice(0, s)));
            var c = i.indexOf("?");
            return c >= 0 && ((a = F(i.slice(c + 1))), (i = i.slice(0, c))), { hash: r, path: i, port: e, query: a };
        },
        F = function (t) {
            return t.split("&").reduce(function (t, e) {
                var n = e.split("=");
                return (t[n[0]] = n[1]), t;
            }, {});
        },
        q = function (t) {
            return void 0 === t && (t = window.location.href), t.replace(/(\/#.*|\/|#.*)$/, "");
        },
        B = {
            __proto__: null,
            getHref: function () {
                return window.location.href;
            },
            getOrigin: M,
            getPort: H,
            getPath: function (t) {
                return void 0 === t && (t = window.location.href), U(t).path;
            },
            parse: U,
            parseQuery: F,
            clean: q,
        };
    function z(t, e, n) {
        return (
            void 0 === e && (e = 2e3),
            new Promise(function (o, r) {
                var i = new XMLHttpRequest();
                (i.onreadystatechange = function () {
                    if (i.readyState === XMLHttpRequest.DONE)
                        if (200 === i.status) o(i.responseText);
                        else if (i.status) {
                            var e = { status: i.status, statusText: i.statusText };
                            n(t, e), r(e);
                        }
                }),
                    (i.ontimeout = function () {
                        var o = new Error("Timeout error [" + e + "]");
                        n(t, o), r(o);
                    }),
                    (i.onerror = function () {
                        var e = new Error("Fetch error");
                        n(t, e), r(e);
                    }),
                    i.open("GET", t),
                    (i.timeout = e),
                    i.setRequestHeader("Accept", "text/html,application/xhtml+xml,application/xml"),
                    i.setRequestHeader("x-barba", "yes"),
                    i.send();
            })
        );
    }
    var V = function (t) {
        return !!t && ("object" == typeof t || "function" == typeof t) && "function" == typeof t.then;
    };
    function Y(t, e) {
        return (
            void 0 === e && (e = {}),
            function () {
                for (var n = arguments.length, o = new Array(n), r = 0; r < n; r++) o[r] = arguments[r];
                var i = !1,
                    a = new Promise(function (n, r) {
                        e.async = function () {
                            return (
                                (i = !0),
                                function (t, e) {
                                    t ? r(t) : n(e);
                                }
                            );
                        };
                        var a = t.apply(e, o);
                        i || (V(a) ? a.then(n, r) : n(a));
                    });
                return a;
            }
        );
    }
    var J = new ((function (t) {
            function e() {
                var e;
                return (
                    ((e = t.call(this) || this).logger = new m("@barba/core")),
                    (e.all = [
                        "ready",
                        "page",
                        "reset",
                        "currentAdded",
                        "currentRemoved",
                        "nextAdded",
                        "nextRemoved",
                        "beforeOnce",
                        "once",
                        "afterOnce",
                        "before",
                        "beforeLeave",
                        "leave",
                        "afterLeave",
                        "beforeEnter",
                        "enter",
                        "afterEnter",
                        "after",
                    ]),
                    (e.registered = new Map()),
                    e.init(),
                    e
                );
            }
            u(e, t);
            var n = e.prototype;
            return (
                (n.init = function () {
                    var t = this;
                    this.registered.clear(),
                        this.all.forEach(function (e) {
                            t[e] ||
                                (t[e] = function (n, o) {
                                    t.registered.has(e) || t.registered.set(e, new Set()),
                                        t.registered.get(e).add({ ctx: o || {}, fn: n });
                                });
                        });
                }),
                (n.do = function (t) {
                    for (var e = this, n = arguments.length, o = new Array(n > 1 ? n - 1 : 0), r = 1; r < n; r++)
                        o[r - 1] = arguments[r];
                    if (this.registered.has(t)) {
                        var i = Promise.resolve();
                        return (
                            this.registered.get(t).forEach(function (t) {
                                i = i.then(function () {
                                    return Y(t.fn, t.ctx).apply(void 0, o);
                                });
                            }),
                            i.catch(function (n) {
                                e.logger.debug("Hook error [" + t + "]"), e.logger.error(n);
                            })
                        );
                    }
                    return Promise.resolve();
                }),
                (n.clear = function () {
                    var t = this;
                    this.all.forEach(function (e) {
                        delete t[e];
                    }),
                        this.init();
                }),
                (n.help = function () {
                    this.logger.info("Available hooks: " + this.all.join(","));
                    var t = [];
                    this.registered.forEach(function (e, n) {
                        return t.push(n);
                    }),
                        this.logger.info("Registered hooks: " + t.join(","));
                }),
                e
            );
        })(function () {}))(),
        W = (function () {
            function t(t) {
                if (((this.P = []), "boolean" == typeof t)) this.g = t;
                else {
                    var e = Array.isArray(t) ? t : [t];
                    this.P = e.map(function (t) {
                        return O(t);
                    });
                }
            }
            return (
                (t.prototype.checkHref = function (t) {
                    if ("boolean" == typeof this.g) return this.g;
                    var e = U(t).path;
                    return this.P.some(function (t) {
                        return null !== t.exec(e);
                    });
                }),
                t
            );
        })(),
        K = (function (t) {
            function e(e) {
                var n;
                return ((n = t.call(this, e) || this).k = new Map()), n;
            }
            u(e, t);
            var n = e.prototype;
            return (
                (n.set = function (t, e, n) {
                    return this.k.set(t, { action: n, request: e }), { action: n, request: e };
                }),
                (n.get = function (t) {
                    return this.k.get(t);
                }),
                (n.getRequest = function (t) {
                    return this.k.get(t).request;
                }),
                (n.getAction = function (t) {
                    return this.k.get(t).action;
                }),
                (n.has = function (t) {
                    return !this.checkHref(t) && this.k.has(t);
                }),
                (n.delete = function (t) {
                    return this.k.delete(t);
                }),
                (n.update = function (t, e) {
                    var n = c({}, this.k.get(t), {}, e);
                    return this.k.set(t, n), n;
                }),
                e
            );
        })(W),
        X = function () {
            return !window.history.pushState;
        },
        G = function (t) {
            return !t.el || !t.href;
        },
        Q = function (t) {
            var e = t.event;
            return e.which > 1 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey;
        },
        Z = function (t) {
            var e = t.el;
            return e.hasAttribute("target") && "_blank" === e.target;
        },
        tt = function (t) {
            var e = t.el;
            return (
                (void 0 !== e.protocol && window.location.protocol !== e.protocol) ||
                (void 0 !== e.hostname && window.location.hostname !== e.hostname)
            );
        },
        et = function (t) {
            var e = t.el;
            return void 0 !== e.port && H() !== H(e.href);
        },
        nt = function (t) {
            var e = t.el;
            return e.getAttribute && "string" == typeof e.getAttribute("download");
        },
        ot = function (t) {
            return t.el.hasAttribute(L.prefix + "-" + L.prevent);
        },
        rt = function (t) {
            return Boolean(t.el.closest("[" + L.prefix + "-" + L.prevent + '="all"]'));
        },
        it = function (t) {
            var e = t.href;
            return q(e) === q() && H(e) === H();
        },
        at = (function (t) {
            function e(e) {
                var n;
                return ((n = t.call(this, e) || this).suite = []), (n.tests = new Map()), n.init(), n;
            }
            u(e, t);
            var n = e.prototype;
            return (
                (n.init = function () {
                    this.add("pushState", X),
                        this.add("exists", G),
                        this.add("newTab", Q),
                        this.add("blank", Z),
                        this.add("corsDomain", tt),
                        this.add("corsPort", et),
                        this.add("download", nt),
                        this.add("preventSelf", ot),
                        this.add("preventAll", rt),
                        this.add("sameUrl", it, !1);
                }),
                (n.add = function (t, e, n) {
                    void 0 === n && (n = !0), this.tests.set(t, e), n && this.suite.push(t);
                }),
                (n.run = function (t, e, n, o) {
                    return this.tests.get(t)({ el: e, event: n, href: o });
                }),
                (n.checkLink = function (t, e, n) {
                    var o = this;
                    return this.suite.some(function (r) {
                        return o.run(r, t, e, n);
                    });
                }),
                e
            );
        })(W),
        st = (function (t) {
            function e(n, o) {
                var r;
                void 0 === o && (o = "Barba error");
                for (var i = arguments.length, a = new Array(i > 2 ? i - 2 : 0), s = 2; s < i; s++) a[s - 2] = arguments[s];
                return (
                    ((r = t.call.apply(t, [this].concat(a)) || this).error = n),
                    (r.label = o),
                    Error.captureStackTrace &&
                        Error.captureStackTrace(
                            (function (t) {
                                if (void 0 === t)
                                    throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                                return t;
                            })(r),
                            e
                        ),
                    (r.name = "BarbaError"),
                    r
                );
            }
            return u(e, t), e;
        })(h(Error)),
        ct = (function () {
            function t(t) {
                void 0 === t && (t = []),
                    (this.logger = new m("@barba/core")),
                    (this.all = []),
                    (this.page = []),
                    (this.once = []),
                    (this.A = [
                        { name: "namespace", type: "strings" },
                        { name: "custom", type: "function" },
                    ]),
                    t && (this.all = this.all.concat(t)),
                    this.update();
            }
            var e = t.prototype;
            return (
                (e.add = function (t, e) {
                    "rule" === t ? this.A.splice(e.position || 0, 0, e.value) : this.all.push(e), this.update();
                }),
                (e.resolve = function (t, e) {
                    var n = this;
                    void 0 === e && (e = {});
                    var o = e.once ? this.once : this.page;
                    o = o.filter(
                        e.self
                            ? function (t) {
                                  return t.name && "self" === t.name;
                              }
                            : function (t) {
                                  return !t.name || "self" !== t.name;
                              }
                    );
                    var r = new Map(),
                        i = o.find(function (o) {
                            var i = !0,
                                a = {};
                            return (
                                !(!e.self || "self" !== o.name) ||
                                (n.A.reverse().forEach(function (e) {
                                    i &&
                                        ((i = n.R(o, e, t, a)),
                                        o.from && o.to && (i = n.R(o, e, t, a, "from") && n.R(o, e, t, a, "to")),
                                        o.from && !o.to && (i = n.R(o, e, t, a, "from")),
                                        !o.from && o.to && (i = n.R(o, e, t, a, "to")));
                                }),
                                r.set(o, a),
                                i)
                            );
                        }),
                        a = r.get(i),
                        s = [];
                    if ((s.push(e.once ? "once" : "page"), e.self && s.push("self"), a)) {
                        var c,
                            u = [i];
                        Object.keys(a).length > 0 && u.push(a),
                            (c = this.logger).info.apply(c, ["Transition found [" + s.join(",") + "]"].concat(u));
                    } else this.logger.info("No transition found [" + s.join(",") + "]");
                    return i;
                }),
                (e.update = function () {
                    var t = this;
                    (this.all = this.all
                        .map(function (e) {
                            return t.T(e);
                        })
                        .sort(function (t, e) {
                            return t.priority - e.priority;
                        })
                        .reverse()
                        .map(function (t) {
                            return delete t.priority, t;
                        })),
                        (this.page = this.all.filter(function (t) {
                            return void 0 !== t.leave || void 0 !== t.enter;
                        })),
                        (this.once = this.all.filter(function (t) {
                            return void 0 !== t.once;
                        }));
                }),
                (e.R = function (t, e, n, o, r) {
                    var i = !0,
                        a = !1,
                        s = t,
                        c = e.name,
                        u = c,
                        l = c,
                        d = c,
                        f = r ? s[r] : s,
                        h = "to" === r ? n.next : n.current;
                    if (r ? f && f[c] : f[c]) {
                        switch (e.type) {
                            default:
                                var p = Array.isArray(f[u]) ? f[u] : [f[u]];
                                h[u] && -1 !== p.indexOf(h[u]) && (a = !0), -1 === p.indexOf(h[u]) && (i = !1);
                                break;
                            case "object":
                                var v = Array.isArray(f[l]) ? f[l] : [f[l]];
                                h[l]
                                    ? (h[l].name && -1 !== v.indexOf(h[l].name) && (a = !0),
                                      -1 === v.indexOf(h[l].name) && (i = !1))
                                    : (i = !1);
                                break;
                            case "function":
                                f[d](n) ? (a = !0) : (i = !1);
                        }
                        a && (r ? ((o[r] = o[r] || {}), (o[r][c] = s[r][c])) : (o[c] = s[c]));
                    }
                    return i;
                }),
                (e.O = function (t, e, n) {
                    var o = 0;
                    return (
                        (t[e] || (t.from && t.from[e]) || (t.to && t.to[e])) &&
                            ((o += Math.pow(10, n)), t.from && t.from[e] && (o += 1), t.to && t.to[e] && (o += 2)),
                        o
                    );
                }),
                (e.T = function (t) {
                    var e = this;
                    t.priority = 0;
                    var n = 0;
                    return (
                        this.A.forEach(function (o, r) {
                            n += e.O(t, o.name, r + 1);
                        }),
                        (t.priority = n),
                        t
                    );
                }),
                t
            );
        })(),
        ut = (function () {
            function t(t) {
                void 0 === t && (t = []), (this.logger = new m("@barba/core")), (this.S = !1), (this.store = new ct(t));
            }
            var e = t.prototype;
            return (
                (e.get = function (t, e) {
                    return this.store.resolve(t, e);
                }),
                (e.doOnce = function (t) {
                    var e = t.data,
                        n = t.transition;
                    try {
                        var o = function () {
                                r.S = !1;
                            },
                            r = this,
                            i = n || {};
                        r.S = !0;
                        var a = p(
                            function () {
                                return Promise.resolve(r.j("beforeOnce", e, i)).then(function () {
                                    return Promise.resolve(r.once(e, i)).then(function () {
                                        return Promise.resolve(r.j("afterOnce", e, i)).then(function () {});
                                    });
                                });
                            },
                            function (t) {
                                (r.S = !1), r.logger.debug("Transition error [before/after/once]"), r.logger.error(t);
                            }
                        );
                        return Promise.resolve(a && a.then ? a.then(o) : o());
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.doPage = function (t) {
                    var e = t.data,
                        n = t.transition,
                        o = t.page,
                        r = t.wrapper;
                    try {
                        var i = function (t) {
                                if (a) return t;
                                s.S = !1;
                            },
                            a = !1,
                            s = this,
                            c = n || {},
                            u = !0 === c.sync || !1;
                        s.S = !0;
                        var l = p(
                            function () {
                                function t() {
                                    return Promise.resolve(s.j("before", e, c)).then(function () {
                                        function t(t) {
                                            return Promise.resolve(s.remove(e)).then(function () {
                                                return Promise.resolve(s.j("after", e, c)).then(function () {});
                                            });
                                        }
                                        var n = (function () {
                                            if (u)
                                                return p(
                                                    function () {
                                                        return Promise.resolve(s.add(e, r)).then(function () {
                                                            return Promise.resolve(s.j("beforeLeave", e, c)).then(
                                                                function () {
                                                                    return Promise.resolve(s.j("beforeEnter", e, c)).then(
                                                                        function () {
                                                                            return Promise.resolve(
                                                                                Promise.all([s.leave(e, c), s.enter(e, c)])
                                                                            ).then(function () {
                                                                                return Promise.resolve(
                                                                                    s.j("afterLeave", e, c)
                                                                                ).then(function () {
                                                                                    return Promise.resolve(
                                                                                        s.j("afterEnter", e, c)
                                                                                    ).then(function () {});
                                                                                });
                                                                            });
                                                                        }
                                                                    );
                                                                }
                                                            );
                                                        });
                                                    },
                                                    function (t) {
                                                        if (s.M(t)) throw new st(t, "Transition error [sync]");
                                                    }
                                                );
                                            var t = function (t) {
                                                    return p(
                                                        function () {
                                                            var t = (function () {
                                                                if (!1 !== n)
                                                                    return Promise.resolve(s.add(e, r)).then(function () {
                                                                        return Promise.resolve(
                                                                            s.j("beforeEnter", e, c)
                                                                        ).then(function () {
                                                                            return Promise.resolve(s.enter(e, c, n)).then(
                                                                                function () {
                                                                                    return Promise.resolve(
                                                                                        s.j("afterEnter", e, c)
                                                                                    ).then(function () {});
                                                                                }
                                                                            );
                                                                        });
                                                                    });
                                                            })();
                                                            if (t && t.then) return t.then(function () {});
                                                        },
                                                        function (t) {
                                                            if (s.M(t))
                                                                throw new st(t, "Transition error [before/after/enter]");
                                                        }
                                                    );
                                                },
                                                n = !1,
                                                i = p(
                                                    function () {
                                                        return Promise.resolve(s.j("beforeLeave", e, c)).then(function () {
                                                            return Promise.resolve(
                                                                Promise.all([s.leave(e, c), N(o, e)]).then(function (t) {
                                                                    return t[0];
                                                                })
                                                            ).then(function (t) {
                                                                return (
                                                                    (n = t),
                                                                    Promise.resolve(s.j("afterLeave", e, c)).then(
                                                                        function () {}
                                                                    )
                                                                );
                                                            });
                                                        });
                                                    },
                                                    function (t) {
                                                        if (s.M(t))
                                                            throw new st(t, "Transition error [before/after/leave]");
                                                    }
                                                );
                                            return i && i.then ? i.then(t) : t();
                                        })();
                                        return n && n.then ? n.then(t) : t();
                                    });
                                }
                                var n = (function () {
                                    if (u) return Promise.resolve(N(o, e)).then(function () {});
                                })();
                                return n && n.then ? n.then(t) : t();
                            },
                            function (t) {
                                if (((s.S = !1), t.name && "BarbaError" === t.name))
                                    throw (s.logger.debug(t.label), s.logger.error(t.error), t);
                                throw (s.logger.debug("Transition error [page]"), s.logger.error(t), t);
                            }
                        );
                        return Promise.resolve(l && l.then ? l.then(i) : i(l));
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.once = function (t, e) {
                    try {
                        return Promise.resolve(J.do("once", t, e)).then(function () {
                            return e.once ? Y(e.once, e)(t) : Promise.resolve();
                        });
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.leave = function (t, e) {
                    try {
                        return Promise.resolve(J.do("leave", t, e)).then(function () {
                            return e.leave ? Y(e.leave, e)(t) : Promise.resolve();
                        });
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.enter = function (t, e, n) {
                    try {
                        return Promise.resolve(J.do("enter", t, e)).then(function () {
                            return e.enter ? Y(e.enter, e)(t, n) : Promise.resolve();
                        });
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.add = function (t, e) {
                    try {
                        return R.addContainer(t.next.container, e), J.do("nextAdded", t), Promise.resolve();
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.remove = function (t) {
                    try {
                        return R.removeContainer(t.current.container), J.do("currentRemoved", t), Promise.resolve();
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.M = function (t) {
                    return t.message ? !/Timeout error|Fetch error/.test(t.message) : !t.status;
                }),
                (e.j = function (t, e, n) {
                    try {
                        return Promise.resolve(J.do(t, e, n)).then(function () {
                            return n[t] ? Y(n[t], n)(e) : Promise.resolve();
                        });
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                s(t, [
                    {
                        key: "isRunning",
                        get: function () {
                            return this.S;
                        },
                        set: function (t) {
                            this.S = t;
                        },
                    },
                    {
                        key: "hasOnce",
                        get: function () {
                            return this.store.once.length > 0;
                        },
                    },
                    {
                        key: "hasSelf",
                        get: function () {
                            return this.store.all.some(function (t) {
                                return "self" === t.name;
                            });
                        },
                    },
                    {
                        key: "shouldWait",
                        get: function () {
                            return this.store.all.some(function (t) {
                                return (t.to && !t.to.route) || t.sync;
                            });
                        },
                    },
                ]),
                t
            );
        })(),
        lt = (function () {
            function t(t) {
                var e = this;
                (this.names = ["beforeLeave", "afterLeave", "beforeEnter", "afterEnter"]),
                    (this.byNamespace = new Map()),
                    0 !== t.length &&
                        (t.forEach(function (t) {
                            e.byNamespace.set(t.namespace, t);
                        }),
                        this.names.forEach(function (t) {
                            J[t](e.L(t));
                        }));
            }
            return (
                (t.prototype.L = function (t) {
                    var e = this;
                    return function (n) {
                        var o = t.match(/enter/i) ? n.next : n.current,
                            r = e.byNamespace.get(o.namespace);
                        return r && r[t] ? Y(r[t], r)(n) : Promise.resolve();
                    };
                }),
                t
            );
        })();
    Element.prototype.matches ||
        (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector),
        Element.prototype.closest ||
            (Element.prototype.closest = function (t) {
                var e = this;
                do {
                    if (e.matches(t)) return e;
                    e = e.parentElement || e.parentNode;
                } while (null !== e && 1 === e.nodeType);
                return null;
            });
    var dt = { container: null, html: "", namespace: "", url: { hash: "", href: "", path: "", port: null, query: {} } },
        ft = new ((function () {
            function t() {
                (this.version = "2.9.7"),
                    (this.schemaPage = dt),
                    (this.Logger = m),
                    (this.logger = new m("@barba/core")),
                    (this.plugins = []),
                    (this.hooks = J),
                    (this.dom = R),
                    (this.helpers = I),
                    (this.history = D),
                    (this.request = z),
                    (this.url = B);
            }
            var e = t.prototype;
            return (
                (e.use = function (t, e) {
                    var n = this.plugins;
                    n.indexOf(t) > -1
                        ? this.logger.warn("Plugin [" + t.name + "] already installed.")
                        : "function" == typeof t.install
                        ? (t.install(this, e), n.push(t))
                        : this.logger.warn("Plugin [" + t.name + '] has no "install" method.');
                }),
                (e.init = function (t) {
                    var e = void 0 === t ? {} : t,
                        n = e.transitions,
                        o = void 0 === n ? [] : n,
                        r = e.views,
                        i = void 0 === r ? [] : r,
                        a = e.schema,
                        s = void 0 === a ? L : a,
                        u = e.requestError,
                        l = e.timeout,
                        d = void 0 === l ? 2e3 : l,
                        f = e.cacheIgnore,
                        h = void 0 !== f && f,
                        p = e.prefetchIgnore,
                        v = void 0 !== p && p,
                        g = e.preventRunning,
                        b = void 0 !== g && g,
                        y = e.prevent,
                        w = void 0 === y ? null : y,
                        $ = e.debug,
                        k = e.logLevel;
                    if (
                        (m.setLevel(!0 === (void 0 !== $ && $) ? "debug" : void 0 === k ? "off" : k),
                        this.logger.info(this.version),
                        Object.keys(s).forEach(function (t) {
                            L[t] && (L[t] = s[t]);
                        }),
                        (this.$ = u),
                        (this.timeout = d),
                        (this.cacheIgnore = h),
                        (this.prefetchIgnore = v),
                        (this.preventRunning = b),
                        (this._ = this.dom.getWrapper()),
                        !this._)
                    )
                        throw new Error("[@barba/core] No Barba wrapper found");
                    this._.setAttribute("aria-live", "polite"), this.q();
                    var _ = this.data.current;
                    if (!_.container) throw new Error("[@barba/core] No Barba container found");
                    if (
                        ((this.cache = new K(h)),
                        (this.prevent = new at(v)),
                        (this.transitions = new ut(o)),
                        (this.views = new lt(i)),
                        null !== w)
                    ) {
                        if ("function" != typeof w) throw new Error("[@barba/core] Prevent should be a function");
                        this.prevent.add("preventCustom", w);
                    }
                    this.history.init(_.url.href, _.namespace),
                        (this.B = this.B.bind(this)),
                        (this.U = this.U.bind(this)),
                        (this.D = this.D.bind(this)),
                        this.F(),
                        this.plugins.forEach(function (t) {
                            return t.init();
                        });
                    var j = this.data;
                    (j.trigger = "barba"),
                        (j.next = j.current),
                        (j.current = c({}, this.schemaPage)),
                        this.hooks.do("ready", j),
                        this.once(j),
                        this.q();
                }),
                (e.destroy = function () {
                    this.q(), this.H(), this.history.clear(), this.hooks.clear(), (this.plugins = []);
                }),
                (e.force = function (t) {
                    window.location.assign(t);
                }),
                (e.go = function (t, e, n) {
                    var o;
                    if ((void 0 === e && (e = "barba"), this.transitions.isRunning)) this.force(t);
                    else if (
                        !(o =
                            "popstate" === e
                                ? this.history.current && this.url.getPath(this.history.current.url) === this.url.getPath(t)
                                : this.prevent.run("sameUrl", null, null, t)) ||
                        this.transitions.hasSelf
                    )
                        return (
                            (e = this.history.change(t, e, n)),
                            n && (n.stopPropagation(), n.preventDefault()),
                            this.page(t, e, o)
                        );
                }),
                (e.once = function (t) {
                    try {
                        var e = this;
                        return Promise.resolve(e.hooks.do("beforeEnter", t)).then(function () {
                            function n() {
                                return Promise.resolve(e.hooks.do("afterEnter", t)).then(function () {});
                            }
                            var o = (function () {
                                if (e.transitions.hasOnce) {
                                    var n = e.transitions.get(t, { once: !0 });
                                    return Promise.resolve(e.transitions.doOnce({ transition: n, data: t })).then(
                                        function () {}
                                    );
                                }
                            })();
                            return o && o.then ? o.then(n) : n();
                        });
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.page = function (t, e, n) {
                    try {
                        var o = function () {
                                var t = r.data;
                                return Promise.resolve(r.hooks.do("page", t)).then(function () {
                                    var e = p(
                                        function () {
                                            var e = r.transitions.get(t, { once: !1, self: n });
                                            return Promise.resolve(
                                                r.transitions.doPage({ data: t, page: i, transition: e, wrapper: r._ })
                                            ).then(function () {
                                                r.q();
                                            });
                                        },
                                        function () {
                                            0 === m.getLevel() && r.force(t.current.url.href);
                                        }
                                    );
                                    if (e && e.then) return e.then(function () {});
                                });
                            },
                            r = this;
                        (r.data.next.url = c({ href: t }, r.url.parse(t))), (r.data.trigger = e);
                        var i = r.cache.has(t)
                                ? r.cache.update(t, { action: "click" }).request
                                : r.cache.set(t, r.request(t, r.timeout, r.onRequestError.bind(r, e)), "click").request,
                            a = (function () {
                                if (r.transitions.shouldWait) return Promise.resolve(N(i, r.data)).then(function () {});
                            })();
                        return Promise.resolve(a && a.then ? a.then(o) : o());
                    } catch (t) {
                        return Promise.reject(t);
                    }
                }),
                (e.onRequestError = function (t) {
                    this.transitions.isRunning = !1;
                    for (var e = arguments.length, n = new Array(e > 1 ? e - 1 : 0), o = 1; o < e; o++)
                        n[o - 1] = arguments[o];
                    var r = n[0],
                        i = n[1],
                        a = this.cache.getAction(r);
                    return (
                        this.cache.delete(r),
                        !((this.$ && !1 === this.$(t, a, r, i)) || ("click" === a && this.force(r), 1))
                    );
                }),
                (e.prefetch = function (t) {
                    var e = this;
                    this.cache.has(t) ||
                        this.cache.set(
                            t,
                            this.request(t, this.timeout, this.onRequestError.bind(this, "barba")).catch(function (t) {
                                e.logger.error(t);
                            }),
                            "prefetch"
                        );
                }),
                (e.F = function () {
                    !0 !== this.prefetchIgnore &&
                        (document.addEventListener("mouseover", this.B), document.addEventListener("touchstart", this.B)),
                        document.addEventListener("click", this.U),
                        window.addEventListener("popstate", this.D);
                }),
                (e.H = function () {
                    !0 !== this.prefetchIgnore &&
                        (document.removeEventListener("mouseover", this.B),
                        document.removeEventListener("touchstart", this.B)),
                        document.removeEventListener("click", this.U),
                        window.removeEventListener("popstate", this.D);
                }),
                (e.B = function (t) {
                    var e = this,
                        n = this.I(t);
                    if (n) {
                        var o = this.dom.getHref(n);
                        this.prevent.checkHref(o) ||
                            this.cache.has(o) ||
                            this.cache.set(
                                o,
                                this.request(o, this.timeout, this.onRequestError.bind(this, n)).catch(function (t) {
                                    e.logger.error(t);
                                }),
                                "enter"
                            );
                    }
                }),
                (e.U = function (t) {
                    var e = this.I(t);
                    if (e)
                        return this.transitions.isRunning && this.preventRunning
                            ? (t.preventDefault(), void t.stopPropagation())
                            : void this.go(this.dom.getHref(e), e, t);
                }),
                (e.D = function (t) {
                    this.go(this.url.getHref(), "popstate", t);
                }),
                (e.I = function (t) {
                    for (var e = t.target; e && !this.dom.getHref(e); ) e = e.parentNode;
                    if (e && !this.prevent.checkLink(e, t, this.dom.getHref(e))) return e;
                }),
                (e.q = function () {
                    var t = this.url.getHref(),
                        e = {
                            container: this.dom.getContainer(),
                            html: this.dom.getHtml(),
                            namespace: this.dom.getNamespace(),
                            url: c({ href: t }, this.url.parse(t)),
                        };
                    (this.C = { current: e, next: c({}, this.schemaPage), trigger: void 0 }),
                        this.hooks.do("reset", this.data);
                }),
                s(t, [
                    {
                        key: "data",
                        get: function () {
                            return this.C;
                        },
                    },
                    {
                        key: "wrapper",
                        get: function () {
                            return this._;
                        },
                    },
                ]),
                t
            );
        })())();
    const ht = ft;
    function pt(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    const vt = (function () {
        function t(e) {
            !(function (t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
            })(this, t),
                (this.button = e),
                (this.OrginalButton = this.button.cloneNode(!0));
        }
        var e, n;
        return (
            (e = t),
            (n = [
                {
                    key: "load",
                    value: function (t) {
                        $(this.button).empty().append('<div class="loader-08"></div>'.concat(t));
                    },
                },
                {
                    key: "stop",
                    value: function () {
                        $(this.button).empty().append(this.OrginalButton.innerHTML);
                    },
                },
            ]) && pt(e.prototype, n),
            t
        );
    })();
    function mt(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    const gt = (function () {
        function t() {
            !(function (t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
            })(this, t);
        }
        var e, n;
        return (
            (e = t),
            (n = [
                {
                    key: "render",
                    value: function () {
                        var t = '<header><div class="title">'.concat(
                            this.title,
                            '</div> <div class="options"><div class="setting logout"><i class="fas fa-cog"></i></div></div></header>'
                        );
                        $("body").prepend(t);
                    },
                },
                {
                    key: "update",
                    value: function (t, e) {
                        $("header .title")
                            .empty()
                            .append(e + " &nbsp; " + t);
                    },
                },
            ]) && mt(e.prototype, n),
            t
        );
    })();
    function bt(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    var yt = new WeakSet();
    function wt() {
        $(".page-loader").remove();
        var t = '<div class="page-loader" '.concat(
            this.target ? 'style="position : absolute; left : 0; top : 0; width : 100%;"' : "",
            '><div class="loader-container"><div class="loader-11"></div></div></div>'
        );
        this.target
            ? ($(this.target).append(t), $(this.target).parent().css({ position: "relative" }))
            : $("body").append(t);
    }
    const $t = (function () {
        function t(e) {
            var n, o;
            !(function (t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
            })(this, t),
                (function (t, e) {
                    if (e.has(t)) throw new TypeError("Cannot initialize the same private elements twice on an object");
                })((n = this), (o = yt)),
                o.add(n),
                (this.target = e),
                (function (t, e, n) {
                    if (!e.has(t)) throw new TypeError("attempted to get private field on non-instance");
                    return n;
                })(this, yt, wt).call(this);
        }
        var e, n;
        return (
            (e = t),
            (n = [
                {
                    key: "load",
                    value: function () {
                        return $(".page-loader").show();
                    },
                },
                {
                    key: "stop",
                    value: function () {
                        return $(".page-loader").fadeOut();
                    },
                },
            ]) && bt(e.prototype, n),
            t
        );
    })();
    function kt(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    function _t(t, e) {
        !(function (t, e) {
            if (e.has(t)) throw new TypeError("Cannot initialize the same private elements twice on an object");
        })(t, e),
            e.add(t);
    }
    function jt(t, e, n) {
        if (!e.has(t)) throw new TypeError("attempted to get private field on non-instance");
        return n;
    }
    var xt = new WeakSet(),
        At = new WeakSet();
    function Et() {
        $("body").append(
            '<div class="toaster">\n            <div class="content">\n                <p></p>\n            </div>\n        </div>'
        );
    }
    function St(t) {
        $(".toaster").addClass("toaster-active"),
            "upload" != t &&
                (this.timer = setTimeout(function () {
                    $(".toaster").removeClass("toaster-active"),
                        $(".toaster .content i").remove(),
                        $(".toaster .content p").text("");
                }, this.timeout));
    }
    const Pt = (function () {
        function t() {
            !(function (t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
            })(this, t),
                _t(this, At),
                _t(this, xt),
                (this.errorIcon = '<i class="fas fa-exclamation-triangle"></i>'),
                (this.successIcon = '<i class="fas fa-check"></i>'),
                (this.uploadIcon = '<i class="fas fa-upload"></i>'),
                (this.timeout = null),
                (this.timer = 0);
        }
        var e, n;
        return (
            (e = t),
            (n = [
                {
                    key: "trigger",
                    value: function (t) {
                        var e = t.type,
                            n = t.content,
                            o = t.timeout;
                        this.timeout = o;
                        var r = null;
                        switch (e) {
                            case "error":
                                r = this.errorIcon;
                                break;
                            case "success":
                                r = this.successIcon;
                                break;
                            case "upload":
                                r = this.uploadIcon;
                        }
                        $(".toaster").remove(),
                            jt(this, xt, Et).call(this),
                            $(".toaster").css({
                                background:
                                    "success" == e
                                        ? "#a5e1ba"
                                        : "error" == e
                                        ? "#ffbbbb"
                                        : "upload" == e
                                        ? "#f9c76b"
                                        : "white",
                            }),
                            $(".toaster .content").prepend(r),
                            $(".toaster .content p").empty().text(n),
                            jt(this, At, St).call(this, e);
                    },
                },
                {
                    key: "kill",
                    value: function () {
                        $(".toaster").removeClass("toaster-active"),
                            $(".toaster .content i").remove(),
                            $(".toaster .content p").text("");
                    },
                },
            ]) && kt(e.prototype, n),
            t
        );
    })();
    var Ct = new Pt(),
        Tt = new WeakSet();
    function Lt() {
        var t = this,
            e = $(this.input).closest(".input-holder"),
            n = e.parent();
        e.append('<div class="increment-button"><i class="fas fa-plus"></i></div>'),
            $(".increment-button").click(function () {
                t.state < 5
                    ? (n.append(
                          '<div class="input-holder new-one">\n            <label for="">'.concat(
                              t.label,
                              '</label>\n            <input required type="number" id="courseAmount" />\n            <div class="close-input-button"><i class="fas fa-times"></i></div>\n            </div>'
                          )
                      ),
                      t.state++)
                    : Ct.trigger({ content: "Cant add more than 6 Installments", type: "error", timeout: 2e3 });
            }),
            $("body").delegate(".close-input-button", "click", function (e) {
                $(e.target).closest(".input-holder").remove(), t.state--;
            });
    }
    const Rt = function t(e, n) {
        var o, r;
        !(function (t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
        })(this, t),
            (function (t, e) {
                if (e.has(t)) throw new TypeError("Cannot initialize the same private elements twice on an object");
            })((o = this), (r = Tt)),
            r.add(o),
            (this.input = e),
            (this.label = n),
            (function (t, e, n) {
                if (!e.has(t)) throw new TypeError("attempted to get private field on non-instance");
                return n;
            })(this, Tt, Lt).call(this),
            (this.state = 0);
    };
    function Dt(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    const Nt = (function () {
        function t() {
            !(function (t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
            })(this, t),
                (this.rendered = !1);
        }
        var e, n;
        return (
            (e = t),
            (n = [
                {
                    key: "render",
                    value: function () {
                        this.rendered || $("body").prepend('<div class="shimmer"></div>');
                    },
                },
                {
                    key: "show",
                    value: function () {
                        return $(".shimmer").fadeIn();
                    },
                },
                {
                    key: "hide",
                    value: function () {
                        return $(".shimmer").fadeOut();
                    },
                },
            ]) && Dt(e.prototype, n),
            t
        );
    })();
    function Ot(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    var It = new WeakSet();
    function Mt() {
        var t = $(".navigation ul li a");
        t.click(function (e) {
            e.preventDefault(), t.removeClass("active"), $(e.target).addClass("active");
        });
    }
    const Ht = (function () {
        function t() {
            var e, n;
            !(function (t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
            })(this, t),
                (function (t, e) {
                    if (e.has(t)) throw new TypeError("Cannot initialize the same private elements twice on an object");
                })((e = this), (n = It)),
                n.add(e),
                (this.isRendered = !1);
        }
        var e, n;
        return (
            (e = t),
            (n = [
                {
                    key: "render",
                    value: function () {
                        this.isRendered ||
                            ($("body").prepend(
                                '\n            <nav class="sidemenu">\n            <div class="header">\n            <img src="http://localhost/medic/assets/images/icon/no_bg_icon.png" width="60"></i> &nbsp; <p>Sherya\'s App</p>\n            </div>\n            <div class="navigation">\n\n                <ul>\n                    <li><a link-ref="dashboard" href="index" class="active"><i class="fas fa-chart-pie"></i> &nbsp; Dashboard</a></li>\n                    <li><a link-ref="admission" href="admissions.html"><i class="fas fa-file-alt"></i> &nbsp; Admissions</a></li>\n                    <li><a link-ref="leads" href="leads.html"><i class="fas fa-chart-line"></i> &nbsp; Leads from app</a></li>\n                    <li><a link-ref="students" href="students.html"><i class="fas fa-users"></i> &nbsp; Students</a></li>\n                    <li><a link-ref="university" href="university.html"><i class="fas fa-university"></i> &nbsp;University</a></li>\n                    <li><a link-ref="category" href="category.html"><i class="fas fa-book"></i> &nbsp;Course</a></li>\n                    <li><a link-ref="accounts" href="accounts.html"><i class="fas fa-credit-card"></i> &nbsp;Accounts</a></li>\n                </ul>\n            </div>\n            </nav>\n            '
                            ),
                            (function (t, e, n) {
                                if (!e.has(t)) throw new TypeError("attempted to get private field on non-instance");
                                return n;
                            })(this, It, Mt).call(this));
                    },
                },
                {
                    key: "active",
                    value: function (t) {
                        if (!this.isRendered) {
                            var e = $(".navigation ul li a");
                            e.each(function () {
                                var n = $(this).attr("link-ref");
                                t == n && (e.removeClass("active"), $(this).addClass("active"));
                            }),
                                (this.isRendered = !0);
                        }
                    },
                },
                {
                    key: "hint",
                    value: function (t) {
                        var e = t.target,
                            n = t.content,
                            o = '<div class="hint">'.concat(n, "</div>");
                        $(".navigation ul li a").each(function () {
                            var t = $(this).attr("link-ref");
                            e == t && $(this).append(o);
                        });
                    },
                },
                {
                    key: "current",
                    value: function () {
                        return $(".navigation ul li .active");
                    },
                },
            ]) && Ot(e.prototype, n),
            t
        );
    })();
    function Ut(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    function Ft(t, e) {
        !(function (t, e) {
            if (e.has(t)) throw new TypeError("Cannot initialize the same private elements twice on an object");
        })(t, e),
            e.add(t);
    }
    function qt(t, e, n) {
        if (!e.has(t)) throw new TypeError("attempted to get private field on non-instance");
        return n;
    }
    var Bt = new WeakSet(),
        zt = new WeakSet();
    function Vt() {
        return '<div class="alert ">\n        <div class="icon">\n          <div style="background:'
            .concat(this.iconColor, '">\n         ')
            .concat(
                this.icon,
                '\n        </div>\n        </div>\n        <div class="content">\n          <div class="title">\n            '
            )
            .concat(this.title, '\n          </div>\n          <div class="hint">\n            ')
            .concat(
                this.hint,
                '\n          </div>\n          <div class="button-holder">\n            <button style="color : #363636;" class="alert-cancel">Cancel</button>\n            <button class="alert-confirm" style="background : '
            )
            .concat(this.ctaColor, '">')
            .concat(this.ctaContent, "</button>\n          </div>\n        </div>\n      </div>");
    }
    function Yt() {
        var t = this;
        $(".alert-cancel").click(function () {
            t.hide();
        }),
            $(".alert-confirm").click(function () {
                t.callback(t.id).then(function () {
                    t.hide(), t.action();
                });
            });
    }
    const Jt = (function () {
        function t(e) {
            !(function (t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
            })(this, t),
                Ft(this, zt),
                Ft(this, Bt);
            var n = e || {},
                o = n.title,
                r = n.hint,
                i = n.cta,
                a = n.icon,
                s = n.callback,
                c = n.id,
                u = n.action;
            (this.title = o),
                (this.hint = r),
                (this.ctaContent = i.content),
                (this.ctaColor = i.color),
                (this.icon = a.ico),
                (this.iconColor = a.color),
                $("main").prepend(qt(this, Bt, Vt).call(this)),
                qt(this, zt, Yt).call(this),
                (this.shimmer = new Nt()),
                (this.callback = s),
                (this.id = c),
                (this.action = u);
        }
        var e, n;
        return (
            (e = t),
            (n = [
                {
                    key: "show",
                    value: function () {
                        this.shimmer.show(), $(".alert").addClass("alert-active");
                    },
                },
                {
                    key: "hide",
                    value: function () {
                        this.shimmer.hide(),
                            $(".alert").removeClass("alert-active"),
                            setTimeout(function () {
                                $(".alert").remove();
                            }, 1e3);
                    },
                },
            ]) && Ut(e.prototype, n),
            t
        );
    })();
    function Wt(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(t, o.key, o);
        }
    }
    new Nt();
    var Kt = new WeakSet(),
        Xt = (function () {
            function t(e) {
                var n, o;
                !(function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
                })(this, t),
                    (function (t, e) {
                        if (e.has(t)) throw new TypeError("Cannot initialize the same private elements twice on an object");
                    })((n = this), (o = Kt)),
                    o.add(n),
                    (this.target = e),
                    (this.currentRowId = null),
                    (this.icons = {
                        edit: '<i class="fas fa-pen"></i>',
                        view: '<i class="fas fa-eye"></i>',
                        block: '<i class="fas fa-ban"></i>',
                        delete: '<i class="fas fa-trash"></i>',
                    }),
                    (this.freeze = null);
            }
            var e, n;
            return (
                (e = t),
                (n = [
                    {
                        key: "clear",
                        value: function () {
                            $(this.target).find("tbody").empty(), $(".table-empty").remove();
                        },
                    },
                    {
                        key: "addRow",
                        value: function (t, e, n, o) {
                            var r = this;
                            (this.freeze = n), (this.currentRowId = (Math.random() + 1).toString(36).substring(7));
                            var i = '<tr block-status="'
                                .concat(this.freeze ? "true" : "false", '" style="background : ')
                                .concat(o || "inherit", '" row-id="')
                                .concat(e, '" id=')
                                .concat(this.currentRowId, ">");
                            t.map(function (t) {
                                return (i += '<td class="accept-block '
                                    .concat(r.freeze ? "block" : "", '">')
                                    .concat(t, "</td>"));
                            }),
                                (i += "</tr>"),
                                $(this.target).find("tbody").append(i);
                        },
                    },
                    {
                        key: "actions",
                        value: function (t) {
                            var e = this,
                                n = '<td class="actions">';
                            for (var o in t)
                                if (t.hasOwnProperty(o))
                                    switch (o) {
                                        case "edit":
                                            n += '<a title="Edit" '
                                                .concat(
                                                    "string" == typeof t[o] ? 'href="' + t[o] + '"' : "",
                                                    ' class="edit-action table-action-button accept-block '
                                                )
                                                .concat(this.freeze ? "block" : "", '" href="">')
                                                .concat(this.icons.edit, "</a>");
                                            break;
                                        case "delete":
                                            n += '<a title="Delete"  '
                                                .concat(
                                                    "string" == typeof t[o] ? 'href="' + t[o] + '"' : "",
                                                    ' class="delete-action table-action-button accept-block '
                                                )
                                                .concat(this.freeze ? "block" : "", '" href="">')
                                                .concat(this.icons.delete, "</a>");
                                            break;
                                        case "view":
                                            n += '<a title="View"  '
                                                .concat(
                                                    "string" == typeof t[o] ? 'href="' + t[o] + '"' : "",
                                                    ' class="view-action table-action-button accept-block '
                                                )
                                                .concat(this.freeze ? "block" : "", '" href="">')
                                                .concat(this.icons.view, "</a>");
                                            break;
                                        case "block":
                                            n += '<a title="Block"  '
                                                .concat(
                                                    "string" == typeof t[o] ? 'href="' + t[o] + '"' : "p",
                                                    ' class="block-action table-action-button" href="">'
                                                )
                                                .concat(this.icons.block, "</a>");
                                    }
                            n += "</td>";
                            var r = $("#" + this.currentRowId);
                            r.append(n),
                                r.find(".delete-action").click(function (n) {
                                    n.preventDefault(),
                                        new Jt({
                                            title: "Are you sure about delete this ?",
                                            hint: "you can't undo this action",
                                            cta: { content: "Delete", color: "#ff4c4c" },
                                            icon: { color: "#ff4c4c", ico: '<i class="fas fa-trash"></i>' },
                                            callback: t.delete,
                                            id: r.attr("row-id"),
                                            action: function () {
                                                (function (t, e, n) {
                                                    if (!e.has(t))
                                                        throw new TypeError(
                                                            "attempted to get private field on non-instance"
                                                        );
                                                    return n;
                                                })(e, Kt, Gt).call(e, r);
                                            },
                                        }).show();
                                }),
                                r.find(".block-action").click(function (e) {
                                    e.preventDefault();
                                    var n = r.attr("block-status");
                                    new Jt({
                                        title: "Are you sure about ".concat("false" == n ? "block" : "unblock", " this ?"),
                                        hint: "you can undo this action",
                                        cta: { content: "false" == n ? "block" : "unblock", color: "orange" },
                                        icon: { color: "orange", ico: '<i class="fas fa-ban"></i>' },
                                        callback: t.block,
                                        id: r.attr("row-id"),
                                        action: function () {
                                            "false" == n
                                                ? (r.attr("block-status", "true"),
                                                  r.find(".accept-block").addClass("block"))
                                                : (r.attr("block-status", "false"),
                                                  r.find(".accept-block").removeClass("block"));
                                        },
                                    }).show();
                                });
                        },
                    },
                    {
                        key: "empty",
                        value: function (t) {
                            var e = (t || {}).button,
                                n =
                                    '<div class="table-empty">\n            <div class="content">\n                <div class="icon">\n                    <img src="assets/icons/empty.png"/>\n                </div>\n                <h3 class>Hey, this table is empty !</h3>';
                            if (e) {
                                var o = e || {},
                                    r = o.url,
                                    i = o.content;
                                n += '<a href="'.concat(r, '">').concat(i, "</a>");
                            }
                            (n += "</div>\n        </div>"), this.clear(), $(this.target).parent().append(n);
                        },
                    },
                    {
                        key: "rowCount",
                        value: function () {
                            return $(this.target).find("tbody tr").length - 1;
                        },
                    },
                    {
                        key: "loader",
                        value: function () {
                            return (
                                $("#progress").remove(),
                                $(this.target)
                                    .parent()
                                    .prepend(
                                        '<div id="progress" style="background : #ff7600!important; z-index : 1000000!important;"><b></b><i></i></div>'
                                    ),
                                {
                                    progress: function () {
                                        $("#progress").width("100%").delay(600);
                                    },
                                    stop: function () {
                                        $("#progress").remove();
                                    },
                                }
                            );
                        },
                    },
                ]),
                n && Wt(e.prototype, n),
                t
            );
        })();
    function Gt(t) {
        t.hide();
    }
    const Qt = Xt;
    function Zt(t, e, n, o, r, i, a) {
        try {
            var s = t[i](a),
                c = s.value;
        } catch (t) {
            return void n(t);
        }
        s.done ? e(c) : Promise.resolve(c).then(o, r);
    }
    function te(t) {
        return function () {
            var e = this,
                n = arguments;
            return new Promise(function (o, r) {
                var i = t.apply(e, n);
                function a(t) {
                    Zt(i, o, r, a, s, "next", t);
                }
                function s(t) {
                    Zt(i, o, r, a, s, "throw", t);
                }
                a(void 0);
            });
        };
    }
    var ee = new Ht();
    ee.render(), ee.hint({ target: "admission", content: "new" });
    var ne = new gt();
    ne.render(), new Nt().render();
    var oe = new Pt(),
        re = new $t();
    function ie(t) {
        return t.split("=")[1];
    }
    function ae(t) {
        var e = null;
        return (
            t.files[0].size > 2e5
                ? ($(t).val(""), oe.trigger({ type: "error", content: "Maximum file size 200 KB", timeout: 2e3 }), (e = !1))
                : (e = !0),
            e
        );
    }
    ht.init({
        debug: !0,
        views: [
            {
                namespace: "dashboard",
                beforeEnter: function (t) {
                    ee.active("dashboard"),
                        console.log(),
                        ne.update("DashBoard", ee.current().find("i")[0].outerHTML),
                        re.load(),
                        re.stop();
                    var e = new Qt("#mytable");
                    function n() {}
                    [
                        { id: 1, name: "UG Courses", total: 10 },
                        { id: 2, name: "PG Courses", total: 5 },
                        { id: 3, name: "Higher Secondary Courses", total: 2 },
                    ].map(function (t) {
                        var o = [t.id, t.name, t.total];
                        e.addRow(o), e.actions({ edit: "somewhere.html", view: "somewhere.html", delete: n });
                    });
                },
            },
            {
                namespace: "listCategory",
                beforeEnter: function () {
                    re.load(), ee.active("category"), ne.update("Category List", ee.current().find("i")[0].outerHTML);
                    var t = 0,
                        e = new Qt("#category_list"),
                        n = i.e(426).then(i.bind(i, 426));
                    fetch("action/fetchAllCategory.php")
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (o) {
                            re.stop(),
                                o.length
                                    ? o.map(function (o) {
                                          t++;
                                          var r = o.name,
                                              i = o.categoryId,
                                              a = o.status,
                                              s = o.total,
                                              c = !1;
                                          2 == a && (c = !0);
                                          var u,
                                              l,
                                              d = [t, r, s];
                                          e.addRow(d, i, c),
                                              e.actions({
                                                  edit: "edit-category.html?id=" + i,
                                                  view: "course.html?id=" + i,
                                                  block:
                                                      ((l = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var o;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (o = { id: e }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/disable.php",
                                                                                          o
                                                                                      ).then(function (t) {
                                                                                          oe.trigger({
                                                                                              content: "You have ".concat(
                                                                                                  t ? "block" : "unblocked",
                                                                                                  " the category"
                                                                                              ),
                                                                                              timeout: 2e3,
                                                                                              type: "success",
                                                                                          });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return l.apply(this, arguments);
                                                      }),
                                                  delete:
                                                      ((u = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var o;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (o = { id: e }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/deleteCategory.php",
                                                                                          o
                                                                                      ).then(function (t) {
                                                                                          console.log(t);
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return u.apply(this, arguments);
                                                      }),
                                              });
                                      })
                                    : (e.empty({
                                          button: {
                                              url: "add-category.html",
                                              content: 'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                          },
                                      }),
                                      re.stop());
                        });
                },
            },
            {
                namespace: "add-category",
                beforeEnter: function () {
                    re.load(),
                        ee.active("category"),
                        ne.update("Add Category", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        $("#add_category_form").submit(function (t) {
                            t.preventDefault();
                            var e = new vt($("#save_btn")[0]);
                            e.load("Creating");
                            var n = $("#categoryName").val(),
                                o = $("#categoryFile")[0].files[0],
                                r = new FormData();
                            r.append("catName", n),
                                r.append("image", o),
                                fetch("action/addCategory.php", { method: "post", body: r })
                                    .then(function (t) {
                                        return t.text();
                                    })
                                    .then(function (t) {
                                        console.log(t),
                                            re.stop(),
                                            1 == t
                                                ? (e.stop(),
                                                  oe.trigger({
                                                      content: "You have added a new Category",
                                                      timeout: 2e3,
                                                      type: "success",
                                                  }),
                                                  ht.go("category.html"))
                                                : (re.stop(),
                                                  oe.trigger({
                                                      content: "Something went wrong !",
                                                      timeout: 2e3,
                                                      type: "error",
                                                  }));
                                    });
                        });
                },
            },
            {
                namespace: "edit_category",
                beforeEnter: function () {
                    re.load(), ee.active("category"), ne.update("Edit Category", ee.current().find("i")[0].outerHTML);
                    var t = window.location.href.split("=")[1];
                    fetch("action/fetchCategoryForEdit.php?id=" + t)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (t) {
                            re.stop(), t.length && $("#categoryName").val(t[0].name);
                        }),
                        $("#categoryFile").on("change", function (t) {
                            ae(t.target);
                        }),
                        $("#edit_category_form").submit(function (e) {
                            e.preventDefault();
                            var n = new vt($("#save_btn")[0]);
                            n.load("Updating");
                            var o = $("#categoryName").val(),
                                r = $("#categoryFile")[0].files[0],
                                i = new FormData();
                            i.append("categoryName", o),
                                i.append("image", r),
                                i.append("id", t),
                                fetch("action/editCategory.php", { method: "post", body: i })
                                    .then(function (t) {
                                        return t.text();
                                    })
                                    .then(function (t) {
                                        1 == t &&
                                            (n.stop(),
                                            oe.trigger({ content: "Category Updated", type: "success", timeout: 2e3 }),
                                            ht.go("category.html"));
                                    });
                        });
                },
            },
            {
                namespace: "add_course",
                beforeEnter: function () {
                    re.load(), ee.active("category"), ne.update("Add Course", ee.current().find("i")[0].outerHTML);
                    var t = ie(window.location.href);
                    re.stop(),
                        $("#courseAmount").on("keyup", function (t) {
                            "" != t.target.value
                                ? $("#courseDiscountAmount").removeAttr("disabled")
                                : $("#courseDiscountAmount").attr("disabled", !0);
                        }),
                        $("#cb2").click(function () {
                            "" != $("#courseAmount").val()
                                ? $(this).is(":checked")
                                    ? ($(".multiple-inputs").show(), $(".multiple-inputs")[0].scrollIntoView())
                                    : ($(".multiple-inputs").hide(), $(".new-one").remove(), $(".multiple input").val(""))
                                : ($("#cb2").prop("checked", !1),
                                  $("#courseAmount").focus(),
                                  $("#courseAmount")[0].scrollIntoView());
                        }),
                        new Rt($(".multiple input"), "New Amount"),
                        fetch("action/fetchAllUniversity.php")
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                t.length &&
                                    t.map(function (t) {
                                        var e = t.university_id,
                                            n = t.name;
                                        $("#university_drop").append(
                                            ' <option value="'.concat(e, '">').concat(n, "</option>")
                                        );
                                    });
                            }),
                        $("#courseFile").on("change", function (e) {
                            ae(e.target) &&
                                $("#add_course_form").submit(function (e) {
                                    e.preventDefault();
                                    var n = new vt($("#save_btn")[0]);
                                    n.load("Creating");
                                    var o = $("#courseName").val(),
                                        r = "" != $("#courseAmount").val() ? $("#courseAmount").val() : 0,
                                        i = "" != $("#courseDiscountAmount").val() ? $("#courseDiscountAmount").val() : 0,
                                        a = $("#courseDes").val(),
                                        s = $("#university_drop").val(),
                                        c = $("#courseFile")[0].files[0],
                                        u = 0,
                                        l = !1,
                                        d = [];
                                    $("#cb1").is(":checked") && (u = 1);
                                    var f,
                                        h,
                                        p = 0;
                                    if ($("#cb2").is(":checked")) {
                                        $(".multiple-inputs input").each(function () {
                                            $(this).val() && ((p = 1), d.push($(this).val()));
                                        });
                                        var v = $("#courseAmount").val(),
                                            m = $("#courseDiscountAmount").val();
                                        (f = "" != m ? m : v),
                                            (h = 0),
                                            $(".multiple-inputs input").each(function () {
                                                $(this).val() && (h += Number($(this).val()));
                                            }),
                                            Number(h) == Number(f)
                                                ? (l = !1)
                                                : (oe.trigger({
                                                      type: "error",
                                                      timeout: 2e3,
                                                      content: "Add Correct Installments",
                                                  }),
                                                  (l = !0));
                                    }
                                    if (l) n.stop();
                                    else {
                                        var g = new FormData();
                                        g.append("courseName", o),
                                            g.append("courseAmount", r),
                                            g.append("courseDiscountAmount", i),
                                            g.append("courseText", a),
                                            g.append("image", c),
                                            g.append("universityId", s),
                                            g.append("sessionCheck", u),
                                            g.append("instalmentStatus", p),
                                            g.append("installMentData", JSON.stringify(d)),
                                            g.append("id", t),
                                            fetch("action/addCourse.php", { method: "post", body: g })
                                                .then(function (t) {
                                                    return t.text();
                                                })
                                                .then(function (e) {
                                                    console.log(e),
                                                        1 == e
                                                            ? (n.stop(),
                                                              oe.trigger({
                                                                  content: "You have added a new Course",
                                                                  timeout: 2e3,
                                                                  type: "success",
                                                              }),
                                                              ht.go("course.html?id=" + t))
                                                            : (oe.trigger({
                                                                  content: "Server not responding !",
                                                                  type: "error",
                                                                  timeout: 1e3,
                                                              }),
                                                              n.stop());
                                                });
                                    }
                                });
                        });
                },
            },
            {
                namespace: "edit_course",
                beforeEnter: function () {
                    re.load(), ee.active("category"), ne.update("Edit Course", ee.current().find("i")[0].outerHTML);
                    var t = window.location.href.split("="),
                        e = t[1].split("&")[0];
                    t[2],
                        fetch("action/fetchCourseForEdit.php?id=" + e)
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                if ((re.stop(), console.log(t), t.length)) {
                                    var e = t[0],
                                        n = e.name,
                                        o = e.courseFee,
                                        r = e.courseDiscountFee,
                                        i = e.discription,
                                        a = (e.sessionStatus, e.university),
                                        s = e.installmentStatus;
                                    return (
                                        $("#courseName").val(n),
                                        $("#courseAmount").val(o),
                                        $("#courseDiscountAmount").val(r),
                                        $("#courseDes").val(i),
                                        1 == s &&
                                            (new Rt($(".multiple input"), "New Amount"),
                                            $("#cb2").click(function () {
                                                "" != $("#courseAmount").val()
                                                    ? $(this).is(":checked")
                                                        ? ($(".multiple-inputs").show(),
                                                          $(".multiple-inputs")[0].scrollIntoView())
                                                        : $(".multiple-inputs").hide()
                                                    : ($("#cb2").prop("checked", !1),
                                                      $("#courseAmount").focus(),
                                                      $("#courseAmount")[0].scrollIntoView());
                                            }),
                                            $("#cb2").click()),
                                        a
                                    );
                                }
                            })
                            .then(function (t) {
                                fetch("action/fetchAllUniversity.php")
                                    .then(function (t) {
                                        return t.json();
                                    })
                                    .then(function (e) {
                                        if ((console.log(e), e.length)) {
                                            var n = "";
                                            e.map(function (e) {
                                                var o = e.university_id,
                                                    r = e.name;
                                                n += " <option "
                                                    .concat(t == o ? "selected" : "", ' value="')
                                                    .concat(o, '">')
                                                    .concat(r, "</option>");
                                            }),
                                                $("#university_drop").empty().append(n);
                                        }
                                    });
                            })
                            .then(function () {
                                fetch("action/fetchCourseInstalmentForEdit.php?id=" + e)
                                    .then(function (t) {
                                        return t.json();
                                    })
                                    .then(function (t) {
                                        console.log(t),
                                            t.map(function (e, n) {
                                                console.log(n);
                                                var o = e.amount;
                                                $(".multiple-inputs .input-holder input").eq(n).val(o),
                                                    n + 1 < t.length &&
                                                        $(".multiple-inputs .input-holder")
                                                            .eq(0)
                                                            .find(".increment-button")
                                                            .click();
                                            });
                                    });
                            }),
                        $("#courseAmount").on("keyup", function (t) {
                            "" != t.target.value
                                ? $("#courseDiscountAmount").removeAttr("disabled")
                                : $("#courseDiscountAmount").attr("disabled", !0);
                        }),
                        fetch("action/fetchAllUniversity.php")
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                t.length &&
                                    t.map(function (t) {
                                        var e = t.university_id,
                                            n = t.name;
                                        $("#university_drop").append(
                                            ' <option value="'.concat(e, '">').concat(n, "</option>")
                                        );
                                    });
                            }),
                        $("#courseFile").on("change", function (t) {
                            ae(t.target);
                        }),
                        $("#edit_course_form").submit(function (t) {
                            t.preventDefault();
                            var n = new vt($("#save_btn")[0]);
                            n.load("Creating");
                            var o,
                                r,
                                i = $("#courseName").val(),
                                a = "" != $("#courseAmount").val() ? $("#courseAmount").val() : 0,
                                s = "" != $("#courseDiscountAmount").val() ? $("#courseDiscountAmount").val() : 0,
                                c = $("#courseDes").val(),
                                u = $("#university_drop").val(),
                                l = $("#courseFile")[0].files[0],
                                d = !1,
                                f = [],
                                h = 0;
                            if ($("#cb2").is(":checked")) {
                                $(".multiple-inputs input").each(function () {
                                    $(this).val() && ((h = 1), f.push($(this).val()));
                                });
                                var p = $("#courseAmount").val(),
                                    v = $("#courseDiscountAmount").val();
                                (o = "" != v ? v : p),
                                    (r = 0),
                                    $(".multiple-inputs input").each(function () {
                                        $(this).val() && (r += Number($(this).val()));
                                    }),
                                    Number(r) == Number(o)
                                        ? (d = !1)
                                        : (oe.trigger({ type: "error", timeout: 2e3, content: "Add Correct Installments" }),
                                          (d = !0));
                            }
                            var m = !1;
                            if (
                                ((function () {
                                    var t = $("#courseAmount").val(),
                                        e = $("#courseDiscountAmount").val();
                                    "" !== e &&
                                        Number(t) < Number(e) &&
                                        ((m = !0),
                                        oe.trigger({
                                            content: "Discount Fee should be smaller than course Fee",
                                            timeout: 2e3,
                                            type: "error",
                                        }),
                                        $("#courseAmount")[0].scrollIntoView(),
                                        $("#courseAmount").focus());
                                })(),
                                d || m)
                            )
                                n.stop();
                            else {
                                var g = new FormData();
                                g.append("courseId", e),
                                    g.append("courseName", i),
                                    g.append("courseAmount", a),
                                    g.append("courseDiscountAmount", s),
                                    g.append("courseText", c),
                                    g.append("image", l),
                                    g.append("universityId", u),
                                    g.append("instalmentStatus", h),
                                    g.append("installMentData", JSON.stringify(f)),
                                    fetch("action/editCourse.php", { method: "post", body: g })
                                        .then(function (t) {
                                            return t.text();
                                        })
                                        .then(function (t) {
                                            console.log(t),
                                                1 == t
                                                    ? (n.stop(),
                                                      oe.trigger({
                                                          content: "You have added a new Course",
                                                          timeout: 2e3,
                                                          type: "success",
                                                      }),
                                                      ht.go("course.html?id=" + e))
                                                    : (oe.trigger({
                                                          content: "Server not responding !",
                                                          type: "error",
                                                          timeout: 1e3,
                                                      }),
                                                      n.stop());
                                        });
                            }
                        });
                },
            },
            {
                namespace: "listCourse",
                beforeEnter: function () {
                    re.load(), ee.active("category"), ne.update("Course List", ee.current().find("i")[0].outerHTML);
                    var t = 0,
                        e = new Qt("#mytable"),
                        n = i.e(426).then(i.bind(i, 426)),
                        o = ie(window.location.href);
                    $(".options a").attr("href", "add-course.html?id=" + o),
                        fetch("action/fetchAllCourse.php?id=" + o)
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (r) {
                                r.length
                                    ? (re.stop(),
                                      r.map(function (r) {
                                          t++;
                                          var i = r.name,
                                              a = r.courseId,
                                              s = r.course_fee,
                                              c = r.session_status,
                                              u = r.status,
                                              l = (r.total, !1);
                                          2 == u ? (l = !0) : 1 == u && (l = !1);
                                          var d,
                                              f,
                                              h = [t, i, s];
                                          e.addRow(h, a, l),
                                              e.actions({
                                                  edit: "edit-course.html?id=" + a + "&catId=" + o,
                                                  view: 1 == c ? "session.html?cid=" + a : "subject.html?cid=" + a,
                                                  block:
                                                      ((f = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var o;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (o = { id: e }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/blockCourse.php",
                                                                                          o
                                                                                      ).then(function (t) {
                                                                                          oe.trigger({
                                                                                              content: "You have ".concat(
                                                                                                  t ? "block" : "unblocked",
                                                                                                  " the category"
                                                                                              ),
                                                                                              timeout: 2e3,
                                                                                              type: "success",
                                                                                          });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return f.apply(this, arguments);
                                                      }),
                                                  delete:
                                                      ((d = te(
                                                          regeneratorRuntime.mark(function t(o) {
                                                              var r;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (r = { id: o }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/deleteCourse.php",
                                                                                          r
                                                                                      ).then(function (t) {
                                                                                          0 == e.rowCount() &&
                                                                                              e.empty({
                                                                                                  button: {
                                                                                                      url: "add-course.html",
                                                                                                      content:
                                                                                                          'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                                                                                  },
                                                                                              }),
                                                                                              oe.trigger({
                                                                                                  content:
                                                                                                      "You have delete the category",
                                                                                                  timeout: 2e3,
                                                                                                  type: "success",
                                                                                              });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return d.apply(this, arguments);
                                                      }),
                                              });
                                      }))
                                    : (e.empty({
                                          button: {
                                              url: "add-course.html?id=" + o,
                                              content: 'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                          },
                                      }),
                                      re.stop());
                            });
                },
            },
            {
                namespace: "add_subject",
                beforeEnter: function () {
                    var t = window.location.href.split("?"),
                        e = t[1].split("=")[1],
                        n = t[1].split("=")[0];
                    re.load(),
                        ee.active("category"),
                        ne.update("Add Subject", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        $("#add_subject_form").submit(function (t) {
                            t.preventDefault();
                            var o = new vt($("#save_btn")[0]);
                            o.load("Creating");
                            var r = $("#subjectName").val(),
                                i = { urlId: e, checkUrl: n, subjectName: r };
                            fetch("action/addSubject.php", {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify(i),
                            })
                                .then(function (t) {
                                    return t.text();
                                })
                                .then(function (t) {
                                    1 == t
                                        ? (o.stop(),
                                          oe.trigger({
                                              content: "You have added a new Subject",
                                              timeout: 2e3,
                                              type: "success",
                                          }),
                                          window.history.back())
                                        : o.stop();
                                });
                        });
                },
            },
            ,
            {
                namespace: "list_session",
                beforeEnter: function () {
                    var t = 0;
                    re.load(), ee.active("category"), ne.update("Sessions", ee.current().find("i")[0].outerHTML), re.stop();
                    var e = ie(window.location.href),
                        n = e;
                    $("#skip_session").attr("href", "subject.html?cid=" + e),
                        $("#createSession").attr("href", "add-session.html?id=" + e);
                    var o = i.e(426).then(i.bind(i, 426)),
                        r = new Qt($("#session_list")[0]);
                    fetch("action/fetchAllSession.php?id=" + e)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (e) {
                            e.length
                                ? (re.stop(),
                                  e.map(function (e) {
                                      t++;
                                      var i = e.name,
                                          a = e.sessionId,
                                          s = e.status,
                                          c = e.total,
                                          u = !1;
                                      2 == s ? (u = !0) : 1 == s && (u = !1);
                                      var l,
                                          d,
                                          f = [t, i, c];
                                      r.addRow(f, a, u),
                                          r.actions({
                                              edit: "edit-session.html?id=" + a,
                                              view: "subject.html?sid=" + a,
                                              block:
                                                  ((d = te(
                                                      regeneratorRuntime.mark(function t(e) {
                                                          var n;
                                                          return regeneratorRuntime.wrap(function (t) {
                                                              for (;;)
                                                                  switch ((t.prev = t.next)) {
                                                                      case 0:
                                                                          (n = { id: e }),
                                                                              o.then(function (t) {
                                                                                  t._del_block(
                                                                                      "action/blockSession.php",
                                                                                      n
                                                                                  ).then(function (t) {
                                                                                      oe.trigger({
                                                                                          content: "You have ".concat(
                                                                                              t ? "block" : "unblocked",
                                                                                              " the subject"
                                                                                          ),
                                                                                          timeout: 2e3,
                                                                                          type: "success",
                                                                                      });
                                                                                  });
                                                                              });
                                                                      case 2:
                                                                      case "end":
                                                                          return t.stop();
                                                                  }
                                                          }, t);
                                                      })
                                                  )),
                                                  function (t) {
                                                      return d.apply(this, arguments);
                                                  }),
                                              delete:
                                                  ((l = te(
                                                      regeneratorRuntime.mark(function t(e) {
                                                          var i;
                                                          return regeneratorRuntime.wrap(function (t) {
                                                              for (;;)
                                                                  switch ((t.prev = t.next)) {
                                                                      case 0:
                                                                          (i = { id: e }),
                                                                              o.then(function (t) {
                                                                                  t._del_block(
                                                                                      "action/deleteSession.php",
                                                                                      i
                                                                                  ).then(function (t) {
                                                                                      0 == r.rowCount() &&
                                                                                          r.empty({
                                                                                              button: {
                                                                                                  url:
                                                                                                      "add-session.html?id=" +
                                                                                                      n,
                                                                                                  content:
                                                                                                      'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                                                                              },
                                                                                          }),
                                                                                          oe.trigger({
                                                                                              content:
                                                                                                  "You have delete the subject",
                                                                                              timeout: 2e3,
                                                                                              type: "success",
                                                                                          });
                                                                                  });
                                                                              });
                                                                      case 2:
                                                                      case "end":
                                                                          return t.stop();
                                                                  }
                                                          }, t);
                                                      })
                                                  )),
                                                  function (t) {
                                                      return l.apply(this, arguments);
                                                  }),
                                          });
                                  }))
                                : (r.empty({
                                      button: {
                                          url: "add-session.html?id=" + n,
                                          content: 'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                      },
                                  }),
                                  re.stop());
                        });
                },
            },
            ,
            {
                namespace: "add_session",
                beforeEnter: function () {
                    re.load(),
                        ee.active("category"),
                        ne.update("Add Session", ee.current().find("i")[0].outerHTML),
                        re.stop();
                    var t = ie(window.location.href);
                    $("#add_session_form").submit(function (e) {
                        e.preventDefault();
                        var n = new vt($("#save_btn")[0]);
                        n.load("Creating");
                        var o = { sessionName: $("#sessionName").val(), courseId: t };
                        fetch("action/addSession.php", {
                            method: "post",
                            headers: { contentType: "application/json" },
                            body: JSON.stringify(o),
                        })
                            .then(function (t) {
                                return t.text();
                            })
                            .then(function (t) {
                                console.log(t),
                                    1 == t
                                        ? (re.stop(),
                                          n.stop(),
                                          oe.trigger({
                                              content: "You have added a new Session",
                                              timeout: 2e3,
                                              type: "success",
                                          }),
                                          window.history.back())
                                        : (re.stop(),
                                          oe.trigger({ content: "Something went wrong !", timeout: 2e3, type: "error" }));
                            });
                    });
                },
            },
            ,
            {
                namespace: "edit_session",
                beforeEnter: function () {
                    re.load(),
                        ee.active("category"),
                        ne.update("Edit Session", ee.current().find("i")[0].outerHTML),
                        re.stop();
                    var t = ie(window.location.href);
                    fetch("action/fetchSessionForEdit.php?id=" + t)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (t) {
                            console.log(t), $("#session_name").val(t[0].name);
                        }),
                        $("#edit_form_session").submit(function (e) {
                            e.preventDefault();
                            var n = new vt($("#save_btn")[0]);
                            n.load("Updating");
                            var o = { session_name: $("#session_name").val(), id: t };
                            fetch("action/editSession.php", {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify(o),
                            })
                                .then(function (t) {
                                    return t.text();
                                })
                                .then(function (t) {
                                    1 == t
                                        ? (n.stop(),
                                          oe.trigger({ content: "session Updated", type: "success", timeout: 2e3 }),
                                          setTimeout(function () {
                                              window.history.back();
                                          }, 500))
                                        : n.stop();
                                });
                        });
                },
            },
            {
                namespace: "list_subject",
                beforeEnter: function () {
                    var t = 0,
                        e = window.location.href.split("?"),
                        n = e[1].split("=")[1],
                        o = e[1].split("=")[0];
                    "cid" == o
                        ? $(".options a").attr("href", "add-subject.html?cid=" + n)
                        : $(".options a").attr("href", "add-subject.html?sid=" + n),
                        re.load(),
                        ee.active("category"),
                        ne.update("List Subject", ee.current().find("i")[0].outerHTML);
                    var r = i.e(426).then(i.bind(i, 426)),
                        a = new Qt($("#subject_table")[0]);
                    re.stop();
                    var s = { urlId: n, checkUrl: o };
                    fetch("action/fetchAllSubject.php", {
                        method: "post",
                        headers: { contentType: "application/json" },
                        body: JSON.stringify(s),
                    })
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (e) {
                            console.log(e),
                                e.length
                                    ? (re.stop(),
                                      e.map(function (e) {
                                          t++;
                                          var i = e.name,
                                              s = e.subjectId,
                                              c = e.status,
                                              u = e.total,
                                              l = !1;
                                          2 == c ? (l = !0) : 1 == c && (l = !1);
                                          var d,
                                              f,
                                              h = [t, i, u];
                                          a.addRow(h, s, l),
                                              a.actions({
                                                  edit: "edit-subject.html?id=" + s + "&courId=" + n,
                                                  view: "lessons.html?id=" + s,
                                                  block:
                                                      ((f = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var n;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (n = { id: e }),
                                                                                  r.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/blockSubject.php",
                                                                                          n
                                                                                      ).then(function (t) {
                                                                                          oe.trigger({
                                                                                              content: "You have ".concat(
                                                                                                  t ? "block" : "unblocked",
                                                                                                  " the subject"
                                                                                              ),
                                                                                              timeout: 2e3,
                                                                                              type: "success",
                                                                                          });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return f.apply(this, arguments);
                                                      }),
                                                  delete:
                                                      ((d = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var i;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (i = { id: e }),
                                                                                  r.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/deleteSubject.php",
                                                                                          i
                                                                                      ).then(function (t) {
                                                                                          0 == a.rowCount() &&
                                                                                              a.empty({
                                                                                                  button: {
                                                                                                      url:
                                                                                                          "cid" == o
                                                                                                              ? "add-subject.html?cid=" +
                                                                                                                n
                                                                                                              : "add-subject.html?sid=" +
                                                                                                                n,
                                                                                                      content:
                                                                                                          'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                                                                                  },
                                                                                              }),
                                                                                              oe.trigger({
                                                                                                  content:
                                                                                                      "You have delete the subject",
                                                                                                  timeout: 2e3,
                                                                                                  type: "success",
                                                                                              });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return d.apply(this, arguments);
                                                      }),
                                              });
                                      }))
                                    : (a.empty({
                                          button: {
                                              url: "cid" == o ? "add-subject.html?cid=" + n : "add-subject.html?sid=" + n,
                                              content: 'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                          },
                                      }),
                                      re.stop());
                        });
                },
            },
            {
                namespace: "edit_subject",
                beforeEnter: function () {
                    var t = window.location.href.split("="),
                        e = t[2],
                        n = t[1].split("&")[0];
                    re.load(),
                        ee.active("category"),
                        ne.update("Edit Subject", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        fetch("action/fetchSubjectForEdit.php?id=" + n)
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                $("#subjectName").val(t[0].name);
                            }),
                        $("#edit_subject_name").submit(function (t) {
                            t.preventDefault();
                            var o = new vt($("#save_btn")[0]);
                            o.load("Updating");
                            var r = { subjectName: $("#subjectName").val(), id: n };
                            fetch("action/editSubject.php", {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify(r),
                            })
                                .then(function (t) {
                                    return t.text();
                                })
                                .then(function (t) {
                                    1 == t
                                        ? (o.stop(),
                                          oe.trigger({ content: "Course Updated", type: "success", timeout: 2e3 }),
                                          ht.go("subject.html?sid=" + e))
                                        : o.stop();
                                });
                        });
                },
            },
            {
                namespace: "list_lessons",
                beforeEnter: function () {
                    var t = 0,
                        e = ie(window.location.href);
                    re.load(),
                        ee.active("category"),
                        ne.update("List Lesson", ee.current().find("i")[0].outerHTML),
                        $(".options a").attr("href", "add-lessons.html?id=" + e);
                    var n = i.e(426).then(i.bind(i, 426)),
                        o = new Qt($("#Lesson_table")[0]);
                    fetch("action/fetchAllLessons.php?id=" + e)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (r) {
                            console.log(r),
                                r.length
                                    ? (re.stop(),
                                      r.map(function (e) {
                                          t++;
                                          var r = e.name,
                                              i = e.lessonId,
                                              a = e.status,
                                              s = e.total,
                                              c = !1;
                                          2 == a ? (c = !0) : 1 == a && (c = !1);
                                          var u,
                                              l,
                                              d = [t, r, s];
                                          o.addRow(d, i, c),
                                              o.actions({
                                                  edit: "edit-lesson.html?id=" + i,
                                                  view: "lesson-videos.html?id=" + i,
                                                  block:
                                                      ((l = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var o;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (o = { id: e }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/blockLesson.php",
                                                                                          o
                                                                                      ).then(function (t) {
                                                                                          oe.trigger({
                                                                                              content: "You have ".concat(
                                                                                                  t ? "block" : "unblocked",
                                                                                                  " the lesson"
                                                                                              ),
                                                                                              timeout: 2e3,
                                                                                              type: "success",
                                                                                          });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return l.apply(this, arguments);
                                                      }),
                                                  delete:
                                                      ((u = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var r;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (r = { id: e }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/deleteLesson.php",
                                                                                          r
                                                                                      ).then(function (t) {
                                                                                          0 == o.rowCount() &&
                                                                                              o.empty({
                                                                                                  button: {
                                                                                                      url: "add-lessons.html",
                                                                                                      content:
                                                                                                          'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                                                                                  },
                                                                                              }),
                                                                                              oe.trigger({
                                                                                                  content:
                                                                                                      "You have delete the Lesson",
                                                                                                  timeout: 2e3,
                                                                                                  type: "success",
                                                                                              });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return u.apply(this, arguments);
                                                      }),
                                              });
                                      }))
                                    : (o.empty({
                                          button: {
                                              url: "add-lessons.html?id=" + e,
                                              content: 'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                          },
                                      }),
                                      re.stop());
                        });
                },
            },
            {
                namespace: "add_lessons",
                beforeEnter: function () {
                    var t = ie(window.location.href);
                    re.load(),
                        ee.active("category"),
                        ne.update("Add Lesson", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        $("#add_lesson_form").submit(function (e) {
                            e.preventDefault();
                            var n = new vt($("#save_btn")[0]);
                            n.load("Creating");
                            var o = $("#lessonName").val(),
                                r = { id: t, lessonName: o };
                            fetch("action/addLesson.php", {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify(r),
                            })
                                .then(function (t) {
                                    return t.text();
                                })
                                .then(function (t) {
                                    1 == t
                                        ? (n.stop(),
                                          oe.trigger({
                                              content: "You have added a new Subject",
                                              timeout: 2e3,
                                              type: "success",
                                          }),
                                          window.history.back())
                                        : (oe.trigger({
                                              content: "Something went wrong try again !",
                                              timeout: 2e3,
                                              type: "error",
                                          }),
                                          n.stop());
                                });
                        });
                },
            },
            {
                namespace: "edit_lesson",
                beforeEnter: function () {
                    var t = ie(window.location.href);
                    re.load(),
                        ee.active("category"),
                        ne.update("Edit Lesson", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        fetch("action/fetchLessionNameForEdit.php?id=" + t)
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                if (t.length) {
                                    var e = t[0].lessionName;
                                    $("#lessonName").val(e);
                                }
                            }),
                        $("#edit_lesson_form").submit(function (e) {
                            e.preventDefault();
                            var n = new vt($("#save_btn")[0]);
                            n.load("Updating");
                            var o = $("#lessonName").val();
                            fetch("action/editLession.php", {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify({ lessionName: o, id: t }),
                            })
                                .then(function (t) {
                                    return t.text();
                                })
                                .then(function (t) {
                                    n.stop(),
                                        1 == t
                                            ? (oe.trigger({
                                                  content: "Updated Succesfully",
                                                  timeout: 2e3,
                                                  type: "success",
                                              }),
                                              window.history.back())
                                            : oe.trigger({
                                                  content: "Something went wrong try again !",
                                                  timeout: 2e3,
                                                  type: "error",
                                              });
                                });
                        });
                },
            },
            {
                namespace: "list_videos",
                beforeEnter: function () {
                    re.load(),
                        ee.active("category"),
                        ne.update("List Videos", ee.current().find("i")[0].outerHTML),
                        re.stop();
                    var t = 0,
                        e = ie(window.location.href);
                    re.load(),
                        ee.active("category"),
                        ne.update("List Videos", ee.current().find("i")[0].outerHTML),
                        $(".options a").attr("href", "add-video.html?id=" + e);
                    var n = i.e(426).then(i.bind(i, 426)),
                        o = new Qt($("#video_table")[0]);
                    fetch("action/fetchAllVideos.php?id=" + e)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (r) {
                            console.log(r),
                                r.length
                                    ? (re.stop(),
                                      r.map(function (e) {
                                          t++;
                                          var r = e.vid,
                                              i = e.name,
                                              a = e.videoId,
                                              s = e.status,
                                              c = !1;
                                          2 == s ? (c = !0) : 1 == s && (c = !1);
                                          var u,
                                              l,
                                              d = [t, i, a];
                                          o.addRow(d, r, c),
                                              o.actions({
                                                  edit: "edit-video.html?id=" + r,
                                                  block:
                                                      ((l = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var o;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (o = { id: e }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/blockVideo.php",
                                                                                          o
                                                                                      ).then(function (t) {
                                                                                          oe.trigger({
                                                                                              content: "You have ".concat(
                                                                                                  t ? "block" : "unblocked",
                                                                                                  " the Video"
                                                                                              ),
                                                                                              timeout: 2e3,
                                                                                              type: "success",
                                                                                          });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return l.apply(this, arguments);
                                                      }),
                                                  delete:
                                                      ((u = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var r;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (r = { id: e }),
                                                                                  n.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/deleteVideo.php",
                                                                                          r
                                                                                      ).then(function (t) {
                                                                                          0 == o.rowCount() &&
                                                                                              o.empty({
                                                                                                  button: {
                                                                                                      url:
                                                                                                          "add-video.html?id=" +
                                                                                                          e,
                                                                                                      content:
                                                                                                          'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                                                                                  },
                                                                                              }),
                                                                                              oe.trigger({
                                                                                                  content:
                                                                                                      "You have delete the Video",
                                                                                                  timeout: 2e3,
                                                                                                  type: "success",
                                                                                              });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return u.apply(this, arguments);
                                                      }),
                                              });
                                      }))
                                    : (o.empty({
                                          button: {
                                              url: "add-video.html?id=" + e,
                                              content: 'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                          },
                                      }),
                                      re.stop());
                        });
                },
            },
            {
                namespace: "edit_video",
                beforeEnter: function () {
                    re.load(),
                        ee.active("category"),
                        ne.update("Edit Videos", ee.current().find("i")[0].outerHTML),
                        re.stop();
                    var t = ie(window.location.href);
                    fetch("action/fetchVideoDataForEdit.php?id=" + t)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (t) {
                            if ((console.log(t), t.length)) {
                                var e = t[0],
                                    n = e.videoName,
                                    o = e.videoApi;
                                $("#videoName").val(n), $("#videoApi").val(o);
                            }
                        }),
                        $("#edit_video").submit(function (e) {
                            e.preventDefault();
                            var n = new vt($("#save_btn")[0]);
                            n.load("Updating");
                            var o = $("#videoName").val(),
                                r = $("#videoApi").val();
                            fetch("action/editVideo.php", {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify({ videoName: o, videoApi: r, id: t }),
                            })
                                .then(function (t) {
                                    return t.text();
                                })
                                .then(function (t) {
                                    n.stop(),
                                        1 == t
                                            ? (oe.trigger({
                                                  content: "Updated Succesfully",
                                                  timeout: 2e3,
                                                  type: "success",
                                              }),
                                              window.history.back())
                                            : oe.trigger({
                                                  content: "Something went wrong try again !",
                                                  timeout: 2e3,
                                                  type: "error",
                                              });
                                });
                        });
                },
            },
            {
                namespace: "add_video",
                beforeEnter: function () {
                    var t = ie(window.location.href);
                    re.load(),
                        ee.active("category"),
                        ne.update("Add Videos", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        $("#add_video_form").submit(function (e) {
                            e.preventDefault();
                            var n = new vt($("#save_btn")[0]);
                            n.load("Creating..");
                            var o = { videoTitle: $("#videoName").val(), videoId: $("#VideoId").val(), lessionId: t };
                            fetch("action/addVideo.php", {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify(o),
                            })
                                .then(function (t) {
                                    return t.text();
                                })
                                .then(function (t) {
                                    1 == t
                                        ? (n.stop(),
                                          oe.trigger({
                                              content: "You have added a new video",
                                              timeout: 2e3,
                                              type: "success",
                                          }),
                                          history.back())
                                        : (oe.trigger({ content: "Server not responding !", type: "error", timeout: 1e3 }),
                                          n.stop());
                                });
                        });
                },
            },
            {
                namespace: "add_university",
                beforeEnter: function () {
                    re.load(),
                        ee.active("university"),
                        ne.update("Add University", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        $("#add_university_form").submit(function (t) {
                            t.preventDefault();
                            var e = $("#universityName").val();
                            fetch("./action/addUniversity.php", {
                                method: "POST",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify({ universityName: e }),
                            })
                                .then(function (t) {
                                    return t.json();
                                })
                                .then(function (t) {
                                    1 == t &&
                                        (history.back(),
                                        oe.trigger({ content: "New University Added", type: "success", timeout: 2e3 }));
                                });
                        });
                },
            },
            {
                namespace: "listUniversity",
                beforeEnter: function () {
                    var t = 0;
                    re.load(),
                        ee.active("university"),
                        ne.update("University List", ee.current().find("i")[0].outerHTML),
                        $(".options a").attr("href", "add-university.html");
                    var e = new Qt("#university_list");
                    fetch("action/fetchAllUniversity.php")
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (o) {
                            o.length
                                ? (re.stop(),
                                  o.map(function (o) {
                                      t++;
                                      var r = o.university_id,
                                          i = o.name,
                                          a = o.status,
                                          s = !1;
                                      2 == a ? (s = !0) : 1 == a && (s = !1);
                                      var c,
                                          u,
                                          l = [t, i, 0];
                                      e.addRow(l, r, s),
                                          e.actions({
                                              edit: "edit-university.html?id=" + r,
                                              block:
                                                  ((u = te(
                                                      regeneratorRuntime.mark(function t(e) {
                                                          var o;
                                                          return regeneratorRuntime.wrap(function (t) {
                                                              for (;;)
                                                                  switch ((t.prev = t.next)) {
                                                                      case 0:
                                                                          (o = { id: e }),
                                                                              n.then(function (t) {
                                                                                  t._del_block(
                                                                                      "action/blockUniversity.php",
                                                                                      o
                                                                                  ).then(function (t) {
                                                                                      oe.trigger({
                                                                                          content: "You have ".concat(
                                                                                              t ? "block" : "unblocked",
                                                                                              " the Video"
                                                                                          ),
                                                                                          timeout: 2e3,
                                                                                          type: "success",
                                                                                      });
                                                                                  });
                                                                              });
                                                                      case 2:
                                                                      case "end":
                                                                          return t.stop();
                                                                  }
                                                          }, t);
                                                      })
                                                  )),
                                                  function (t) {
                                                      return u.apply(this, arguments);
                                                  }),
                                              delete:
                                                  ((c = te(
                                                      regeneratorRuntime.mark(function t(o) {
                                                          var r;
                                                          return regeneratorRuntime.wrap(function (t) {
                                                              for (;;)
                                                                  switch ((t.prev = t.next)) {
                                                                      case 0:
                                                                          (r = { id: o }),
                                                                              n.then(function (t) {
                                                                                  t._del_block(
                                                                                      "action/deleteUniversity.php",
                                                                                      r
                                                                                  ).then(function (t) {
                                                                                      0 == e.rowCount() &&
                                                                                          e.empty({
                                                                                              button: {
                                                                                                  url:
                                                                                                      "add-university.html?id=" +
                                                                                                      ie(
                                                                                                          window.location
                                                                                                              .href
                                                                                                      ),
                                                                                                  content:
                                                                                                      'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                                                                              },
                                                                                          }),
                                                                                          oe.trigger({
                                                                                              content:
                                                                                                  "You have delete the Video",
                                                                                              timeout: 2e3,
                                                                                              type: "success",
                                                                                          });
                                                                                  });
                                                                              });
                                                                      case 2:
                                                                      case "end":
                                                                          return t.stop();
                                                                  }
                                                          }, t);
                                                      })
                                                  )),
                                                  function (t) {
                                                      return c.apply(this, arguments);
                                                  }),
                                          });
                                  }))
                                : (e.empty({
                                      button: {
                                          url: "add-university.html",
                                          content: 'Let\'s Create &nbsp; <i class="fas fa-plus"></i>',
                                      },
                                  }),
                                  re.stop());
                        });
                    var n = i.e(426).then(i.bind(i, 426));
                },
            },
            {
                namespace: "edit_university",
                beforeEnter: function () {
                    re.load(), ee.active("university"), ne.update("Edit University", ee.current().find("i")[0].outerHTML);
                    var t = ie(window.location.href);
                    fetch("action/fetchUniversityDataForEdit.php?id=" + t)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (t) {
                            t.length ? (re.stop(), $("#university_name").val(t[0].name)) : re.stop();
                        }),
                        $("#edit_university_form").submit(function (e) {
                            e.preventDefault();
                            var n = $("#university_name").val();
                            n &&
                                fetch("action/editUniversity.php", {
                                    method: "POST",
                                    headers: { contentType: "application/json" },
                                    body: JSON.stringify({ value: n, id: t }),
                                })
                                    .then(function (t) {
                                        return t.json();
                                    })
                                    .then(function (t) {
                                        1 == t &&
                                            (history.back(),
                                            oe.trigger({ content: "University Updated !", timeout: 2e3, type: "success" }));
                                    });
                        });
                },
            },
            {
                namespace: "create_student",
                beforeEnter: function () {
                    re.load(), ee.active("createstudent"), ne.update("Create Student", ee.current().find("i")[0].outerHTML);
                    var t = new Qt("#mytable");
                    re.stop(),
                        [
                            { id: 1, name: "kannan Uthaman", course: "BCA" },
                            { id: 2, name: "Anurag Mohan", course: "BCOM" },
                            { id: 3, name: "Shareek Ali", course: "BBA" },
                        ].map(function (e) {
                            var n,
                                o,
                                r = [e.id, e.name, e.course];
                            t.addRow(r),
                                t.actions({
                                    edit: "somewhere.html",
                                    view: "somewhere.html",
                                    block:
                                        ((o = te(
                                            regeneratorRuntime.mark(function t(e) {
                                                return regeneratorRuntime.wrap(function (t) {
                                                    for (;;)
                                                        switch ((t.prev = t.next)) {
                                                            case 0:
                                                            case "end":
                                                                return t.stop();
                                                        }
                                                }, t);
                                            })
                                        )),
                                        function (t) {
                                            return o.apply(this, arguments);
                                        }),
                                    delete:
                                        ((n = te(
                                            regeneratorRuntime.mark(function t(e) {
                                                return regeneratorRuntime.wrap(function (t) {
                                                    for (;;)
                                                        switch ((t.prev = t.next)) {
                                                            case 0:
                                                            case "end":
                                                                return t.stop();
                                                        }
                                                }, t);
                                            })
                                        )),
                                        function (t) {
                                            return n.apply(this, arguments);
                                        }),
                                });
                        });
                },
            },
            {
                namespace: "leads",
                beforeEnter: function () {
                    var t = 0,
                        e = 0;
                    re.load(), ee.active("leads"), ne.update("Leads from App", ee.current().find("i")[0].outerHTML);
                    var n = new Qt("#category_list"),
                        o = i.e(426).then(i.bind(i, 426));
                    function r(e) {
                        fetch("action/fetchAllLeads.php?limit=" + e)
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (e) {
                                e.length
                                    ? (re.stop(),
                                      e.map(function (e) {
                                          t++;
                                          var r,
                                              i = e.id,
                                              a = e.name,
                                              s = e.email,
                                              c = e.phone,
                                              u = e.date,
                                              l = e.read_status,
                                              d = [t, a, s, c, u];
                                          n.addRow(d, i, !1, 1 == l ? "#f0fff8" : ""),
                                              n.actions({
                                                  view: "lead-info.html?id=" + i,
                                                  delete:
                                                      ((r = te(
                                                          regeneratorRuntime.mark(function t(e) {
                                                              var r;
                                                              return regeneratorRuntime.wrap(function (t) {
                                                                  for (;;)
                                                                      switch ((t.prev = t.next)) {
                                                                          case 0:
                                                                              (r = { id: e }),
                                                                                  o.then(function (t) {
                                                                                      t._del_block(
                                                                                          "action/deleteLead.php",
                                                                                          r
                                                                                      ).then(function (t) {
                                                                                          0 == n.rowCount() && n.empty(),
                                                                                              oe.trigger({
                                                                                                  content:
                                                                                                      "You have delete the lead",
                                                                                                  timeout: 2e3,
                                                                                                  type: "success",
                                                                                              });
                                                                                      });
                                                                                  });
                                                                          case 2:
                                                                          case "end":
                                                                              return t.stop();
                                                                      }
                                                              }, t);
                                                          })
                                                      )),
                                                      function (t) {
                                                          return r.apply(this, arguments);
                                                      }),
                                              });
                                      }))
                                    : (n.empty(), re.stop());
                            });
                    }
                    fetch("action/splitPageLeads.php?limit=10")
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (o) {
                            if ((console.log(o[0].length), "" != o[0].length)) {
                                var i = o[0].length;
                                1 == i
                                    ? ((t = 0), (e = 0), $(".pagination-sm").hide(), r(e + ",10"))
                                    : ($(".pagination-sm").show(),
                                      $.getScript("http://localhost/medic/src/plugin/pagination.js", function () {
                                          $("#pagination-demo").twbsPagination("destroy"),
                                              $("#pagination-demo").twbsPagination({
                                                  totalPages: i,
                                                  visiblePages: 10,
                                                  onPageClick: function (n, o) {
                                                      1 == o ? ((t = 0), (e = 0)) : (e = 10 * (o - 1)),
                                                          (t = e),
                                                          r(e + ",10");
                                                  },
                                              });
                                      }));
                            } else $(".pagination-sm").hide(), n.empty();
                        });
                },
            },
            {
                namespace: "innerLeads",
                beforeEnter: function () {
                    var t = ie(window.location.href);
                    re.load(),
                        ee.active("leads"),
                        ne.update("Lead Details", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        fetch("action/fetchAllInnerLeads.php?id=" + t)
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                return (
                                    console.log(t),
                                    $("#fullName").val(t[0].name),
                                    $("#email").val(t[0].email),
                                    $("#mobile").val(t[0].phone),
                                    $("#alt_phone").val(t[0].alt_phone),
                                    $("#qualification").val(t[0].qualification),
                                    $("#pincode").val(t[0].phone),
                                    $("#address").val(t[0].address),
                                    1 == t[0].readStatus &&
                                        $("#read_btn")
                                            .css({ background: "rgb(11, 179, 11)" })
                                            .empty()
                                            .append('Lead Converted &nbsp; <i class="fas fa-thumbs-up"></i>')
                                            .attr("data-done", "true"),
                                    t[0].id
                                );
                            })
                            .then(function (t) {
                                $("#read_btn").click(function (e) {
                                    e.preventDefault();
                                    var n = 0,
                                        o = $(e.target).attr("data-done");
                                    "true" == o
                                        ? ((n = 1),
                                          $("#read_btn")
                                              .css({ background: "#7A68FF" })
                                              .empty()
                                              .append('Mark as done &nbsp; <i class="fas fa-check"></i>')
                                              .attr("data-done", "false"))
                                        : $("#read_btn")
                                              .css({ background: "rgb(11, 179, 11)" })
                                              .empty()
                                              .append('Lead Converted &nbsp; <i class="fas fa-thumbs-up"></i>')
                                              .attr("data-done", "true");
                                    var r = { id: t, status: n };
                                    fetch("action/markReadStatusUpdate.php", {
                                        method: "post",
                                        headers: { contentType: "application/json" },
                                        body: JSON.stringify(r),
                                    })
                                        .then(function (t) {
                                            return t.text();
                                        })
                                        .then(function (t) {
                                            "false" == o
                                                ? oe.trigger({
                                                      content: "Marked as converted",
                                                      type: "success",
                                                      timeout: 2e3,
                                                  })
                                                : oe.trigger({
                                                      content: "Marked as default",
                                                      type: "success",
                                                      timeout: 2e3,
                                                  }),
                                                ht.go("leads.html");
                                        });
                                });
                            });
                },
            },
            {
                namespace: "admission_info",
                beforeEnter: function () {
                    re.load(),
                        ee.active("admission"),
                        ne.update("Admission Info", ee.current().find("i")[0].outerHTML),
                        re.stop();
                    var t = ie(window.location.href);
                    fetch("action/fetchAdmissionInnerData.php?id=" + t)
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (t) {
                            var e = t[0],
                                n = e.studentName,
                                o = e.phone,
                                r = e.email,
                                i = e.alt_phone,
                                a = e.address,
                                s = e.aadhar,
                                c = e.certificate,
                                u = e.photo,
                                l = e.pincode,
                                d = e.qualification,
                                f = e.course_name,
                                h = e.course_amount,
                                p = e.payment_method,
                                v = e.instalment_id;
                            return (
                                $("#fullName").val(n),
                                $("#email").val(r),
                                $("#mobile").val(o),
                                $("#alt_phone").val(i),
                                $("#qualification").val(d),
                                $("#pincode").val(l),
                                $("#address").val(a),
                                $("#certificate")
                                    .find("a")
                                    .attr("href", "upload_image/student_documents/" + c),
                                $("#aadhaar")
                                    .find("a")
                                    .attr("href", "upload_image/student_documents/" + s),
                                $("#photo")
                                    .find("a")
                                    .attr("href", "upload_image/student_documents/" + u),
                                $("#course_name p").text(f),
                                $("#course_amount p span").text(h),
                                $("#payment-type p").text("direct" == p ? "Full Payment" : "Installment"),
                                $("#paid-amount p span").text("direct" == p ? h : ""),
                                { method: p, id: v }
                            );
                        })
                        .then(function (e) {
                            var n = e || {},
                                o = n.method,
                                r = n.id;
                            if ("instalment" == o) {
                                var i = new Date(),
                                    a = i.getMonth() + 1,
                                    s = i.getDate(),
                                    c = i.getFullYear();
                                a < 10 && (a = "0" + a.toString()), s < 10 && (s = "0" + s.toString());
                                var u = c + "-" + a + "-" + s;
                                $(".due-input").attr("min", u),
                                    fetch("action/fetchInstalmentAdmissionInner.php?id=" + t)
                                        .then(function (t) {
                                            return t.json();
                                        })
                                        .then(function (t) {
                                            t &&
                                                t.map(function (t) {
                                                    var e = t.instalmentId,
                                                        n = t.instalmentAmount,
                                                        o = ' <div data-installment-id="'
                                                            .concat(e, '" class="box ')
                                                            .concat(
                                                                e == r ? "active" : "",
                                                                '"><i class="fas fa-rupee-sign"></i> '
                                                            )
                                                            .concat(n, "</div>");
                                                    $(".installment-holder ul li").append(o),
                                                        e == r && $("#paid-amount p span").text(n);
                                                }),
                                                $(".installment-holder").show();
                                        });
                            } else $(".due-date-picker").remove();
                        })
                        .then(function () {
                            function e(t, e) {
                                return n.apply(this, arguments);
                            }
                            function n() {
                                return (n = te(
                                    regeneratorRuntime.mark(function e(n, r) {
                                        var i;
                                        return regeneratorRuntime.wrap(function (e) {
                                            for (;;)
                                                switch ((e.prev = e.next)) {
                                                    case 0:
                                                        return (
                                                            (i = new FormData()).append("file", n),
                                                            i.append("updateType", r),
                                                            i.append("admissionId", t),
                                                            e.abrupt(
                                                                "return",
                                                                fetch("action/updateAdmissionDocs.php", {
                                                                    method: "post",
                                                                    body: i,
                                                                })
                                                                    .then(function (t) {
                                                                        return t.text();
                                                                    })
                                                                    .then(function (t) {
                                                                        return console.log(t), 1 == t && (o(), !0);
                                                                    })
                                                            )
                                                        );
                                                    case 5:
                                                    case "end":
                                                        return e.stop();
                                                }
                                        }, e);
                                    })
                                )).apply(this, arguments);
                            }
                            function o() {
                                return r.apply(this, arguments);
                            }
                            function r() {
                                return (r = te(
                                    regeneratorRuntime.mark(function e() {
                                        return regeneratorRuntime.wrap(function (e) {
                                            for (;;)
                                                switch ((e.prev = e.next)) {
                                                    case 0:
                                                        return (
                                                            (e.next = 2),
                                                            fetch("action/fetchAdmissionInnerData.php?id=" + t)
                                                                .then(function (t) {
                                                                    return t.json();
                                                                })
                                                                .then(function (t) {
                                                                    var e = t[0],
                                                                        n = e.aadhar,
                                                                        o = e.certificate,
                                                                        r = e.photo;
                                                                    $("#certificate")
                                                                        .find("a")
                                                                        .attr(
                                                                            "href",
                                                                            "upload_image/student_documents/" + o
                                                                        ),
                                                                        $("#aadhaar")
                                                                            .find("a")
                                                                            .attr(
                                                                                "href",
                                                                                "upload_image/student_documents/" + n
                                                                            ),
                                                                        $("#photo")
                                                                            .find("a")
                                                                            .attr(
                                                                                "href",
                                                                                "upload_image/student_documents/" + r
                                                                            );
                                                                })
                                                        );
                                                    case 2:
                                                    case "end":
                                                        return e.stop();
                                                }
                                        }, e);
                                    })
                                )).apply(this, arguments);
                            }
                            $("#inner_leads_form").submit(function (e) {
                                e.preventDefault();
                                var n = $("#fullName").val(),
                                    o = $("#email").val(),
                                    r = $("#mobile").val(),
                                    i = $("#alt_phone").val(),
                                    a = $("#qualification").val(),
                                    s = $("#pincode").val(),
                                    c = $("#address").val(),
                                    u = new vt($("#update_info_btn")[0]);
                                u.load("Updating..."),
                                    fetch("action/updateAdmissionInfo.php", {
                                        method: "POST",
                                        headers: { contentType: "application/json" },
                                        body: JSON.stringify({
                                            admissionId: t,
                                            name: n,
                                            email: o,
                                            mobile: r,
                                            alt_mobile: i,
                                            qualification: a,
                                            pincode: s,
                                            address: c,
                                        }),
                                    })
                                        .then(function (t) {
                                            return t.json();
                                        })
                                        .then(function (t) {
                                            1 == t
                                                ? (u.stop(),
                                                  oe.trigger({
                                                      content: "Info Updated Successfully",
                                                      timeout: 2e3,
                                                      type: "success",
                                                  }))
                                                : (u.stop(),
                                                  oe.trigger({
                                                      content: "Something Went Wrong",
                                                      timeout: 2e3,
                                                      type: "error",
                                                  }));
                                        });
                            }),
                                $(".upload").click(function () {
                                    var t = $(this).attr("data-update-type"),
                                        n = $(this).parent().find("input");
                                    n.blur(function () {
                                        o();
                                    }),
                                        n[0].click(),
                                        n.unbind().on("change", function () {
                                            console.log(n.val()),
                                                "photo" == t
                                                    ? ae(n[0])
                                                        ? (oe.trigger({
                                                              content: "Please wait uploading docs",
                                                              type: "upload",
                                                              timeout: "",
                                                          }),
                                                          e(n[0].files[0], t).then(function (t) {
                                                              1 == t
                                                                  ? (oe.kill(),
                                                                    oe.trigger({
                                                                        content: "Document Updated",
                                                                        type: "success",
                                                                        timeout: 2e3,
                                                                    }))
                                                                  : (oe.kill(),
                                                                    oe.trigger({
                                                                        content: "Something went wrong",
                                                                        type: "error",
                                                                        timeout: 2e3,
                                                                    }));
                                                          }))
                                                        : oe.trigger({
                                                              content: "Maximum fize size : 400kb",
                                                              timeout: 2e3,
                                                              type: "error",
                                                          })
                                                    : (oe.trigger({
                                                          content: "Please wait uploading docs",
                                                          type: "upload",
                                                          timeout: "",
                                                      }),
                                                      e(n[0].files[0], t).then(function (t) {
                                                          oe.kill(),
                                                              1 == t
                                                                  ? oe.trigger({
                                                                        content: "Document Updated",
                                                                        type: "success",
                                                                        timeout: 2e3,
                                                                    })
                                                                  : oe.trigger({
                                                                        content: "Something went wrong",
                                                                        type: "error",
                                                                        timeout: 2e3,
                                                                    });
                                                      }));
                                        });
                                });
                        }),
                        $("#approve_form").submit(function (e) {
                            e.preventDefault();
                            var n = 0;
                            if (
                                ($("#inner_leads_form input, textarea").each(function () {
                                    var t = $(this);
                                    "" == t.val() && (t.css({ border: "1px solid red" }), n++);
                                }),
                                $("#inner_leads_form")[0].scrollIntoView(),
                                0 == n)
                            ) {
                                var o = new vt($("#approve_student")[0]);
                                o.load("Approving...");
                                var r = $.trim(parseInt($("#course_amount p span").text())),
                                    i = $.trim(parseInt($("#paid-amount p span").text())),
                                    a = 0;
                                "" != $(".due").val() && (a = $(".due").val()),
                                    fetch("action/approveStudent.php?id=" + t, {
                                        method: "post",
                                        headers: { contentType: "application/json" },
                                        body: JSON.stringify({ courseAmount: r, paidAmount: i, nextDueDate: a }),
                                    })
                                        .then(function (t) {
                                            return t.text();
                                        })
                                        .then(function (t) {
                                            console.log(t),
                                                1 == t
                                                    ? (o.stop(),
                                                      oe.trigger({
                                                          content: "Approved Successfully",
                                                          type: "success",
                                                          timeout: 2e3,
                                                      }),
                                                      history.back())
                                                    : (o.stop(),
                                                      oe.trigger({
                                                          content: "Someting Went Wrong!",
                                                          type: "error",
                                                          timeout: 2e3,
                                                      }));
                                        });
                            }
                        }),
                        $("#declined").click(function (e) {
                            var n = new vt(e.target);
                            n.load("Declining..."),
                                fetch("action/declindStudent.php?id=" + t)
                                    .then(function (t) {
                                        return t.text();
                                    })
                                    .then(function (t) {
                                        console.log(t),
                                            1 == t
                                                ? (n.stop(),
                                                  oe.trigger({
                                                      content: "Declind Successfully",
                                                      type: "success",
                                                      timeout: 2e3,
                                                  }),
                                                  history.back())
                                                : (n.stop(),
                                                  oe.trigger({
                                                      content: "Someting Went Wrong!",
                                                      type: "error",
                                                      timeout: 2e3,
                                                  }));
                                    });
                        });
                },
            },
            {
                namespace: "newadmission",
                beforeEnter: function () {
                    var t = 0;
                    re.load(),
                        ee.active("admission"),
                        ne.update("New Admissions", ee.current().find("i")[0].outerHTML),
                        fetch("action/fetchAllNewAdmission.php")
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (n) {
                                n.length
                                    ? (re.stop(),
                                      n.map(function (n) {
                                          t++;
                                          var o = n.id,
                                              r = n.name,
                                              i = n.email,
                                              a = n.course,
                                              s = [t, r, i, a];
                                          e.addRow(s), e.actions({ view: "admission-info.html?id=" + o });
                                      }))
                                    : (e.empty(), re.stop());
                            });
                    var e = new Qt("#newadmission_table");
                },
            },
            {
                namespace: "admission",
                beforeEnter: function () {
                    re.load(),
                        ee.active("admission"),
                        ne.update("Admissions", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        fetch("action/fetchAdmissionCount.php")
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                $("#new_admission_count").append(t[0].count);
                            }),
                        fetch("action/fetchRejectCount.php")
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                $("#rejection_count").append(t[0].count);
                            });
                    var t = $(".tab a");
                    t.click(function (e) {
                        e.preventDefault();
                        var n = $(e.target).attr("data-for"),
                            o = $(".view");
                        t.removeClass("active-tab"),
                            $(e.target).addClass("active-tab"),
                            o.each(function () {
                                var t = $($(this)).attr("data-for");
                                if (n == t) {
                                    var e = $(this);
                                    o.hide(),
                                        e.show(),
                                        (function (t) {
                                            console.log(t);
                                            var e = new $t(t);
                                            e.load(), e.stop();
                                        })(e);
                                }
                            });
                    });
                },
            },
            {
                namespace: "accounts",
                beforeEnter: function () {
                    re.load(), ee.active("accounts"), ne.update("Accounts", ee.current().find("i")[0].outerHTML), re.stop();
                },
            },
            {
                namespace: "payments",
                beforeEnter: function () {
                    var t = 0;
                    re.load(), ee.active("accounts"), ne.update("Payments", ee.current().find("i")[0].outerHTML), re.stop();
                    var e = new Qt($("#payments_tbl")[0]);
                    fetch("action/fetchAllNewPayments.php")
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (n) {
                            console.log(n),
                                n.length
                                    ? (re.stop(),
                                      n.map(function (n) {
                                          t++;
                                          var o = n.courseId,
                                              r = n.studentId,
                                              i = n.name,
                                              a = n.course,
                                              s = n.amount,
                                              c = [
                                                  t,
                                                  i,
                                                  a,
                                                  '<span style="color : green; font-size : 20px; font-weight : 500;"><i class="fas fa-rupee-sign"></i> &nbsp; '.concat(
                                                      s,
                                                      "</span>"
                                                  ),
                                              ];
                                          e.addRow(c),
                                              e.actions({ view: "student-info.html?id=" + r + "&cid=" + o + "&trigger" });
                                      }))
                                    : (e.empty(), re.stop());
                        });
                },
            },
            {
                namespace: "all_payments",
                beforeEnter: function () {
                    var t = 0,
                        e = 0,
                        n = 0,
                        o = null;
                    re.load(), ee.active("accounts"), ne.update("All Payments", ee.current().find("i")[0].outerHTML);
                    var r = new Qt($("#all_payments_tbl")[0]);
                    function i(e) {
                        r.clear(),
                            r.loader().progress(),
                            fetch("action/fetchAllPaymentData.php?limit=" + e, {
                                method: "post",
                                headers: { contentType: "application/json" },
                                body: JSON.stringify({ filterStatus: n, dateFilter: o }),
                            })
                                .then(function (t) {
                                    return t.json();
                                })
                                .then(function (e) {
                                    re.stop(),
                                        console.log(e),
                                        e.length
                                            ? (e.map(function (e) {
                                                  t++;
                                                  var n = e.amount,
                                                      o = e.student_id,
                                                      i = e.studentName,
                                                      a = e.courseName,
                                                      s = e.date,
                                                      c = e.time,
                                                      u = [t, i, a, '<i class="fas fa-rupee-sign"></i> &nbsp; ' + n, s, c];
                                                  r.addRow(u), r.actions({ view: "student-info.html?id=" + o });
                                              }),
                                              r.loader().stop())
                                            : r.empty();
                                });
                    }
                    function a(a) {
                        fetch("action/splitPageAllPayments.php?limit=" + a, {
                            method: "post",
                            headers: { contentType: "application/json" },
                            body: JSON.stringify({ filterStatus: n, dateFilter: o }),
                        })
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (n) {
                                if ((console.log(n[0].length), "" != n[0].length)) {
                                    var o = n[0].length;
                                    1 == o
                                        ? ((t = 0), (e = 0), $(".pagination-sm").hide(), i(e + ",10"))
                                        : ($(".pagination-sm").show(),
                                          $.getScript("http://localhost/medic/src/plugin/pagination.js", function () {
                                              $("#pagination-demo").twbsPagination("destroy"),
                                                  $("#pagination-demo").twbsPagination({
                                                      totalPages: o,
                                                      visiblePages: 10,
                                                      onPageClick: function (n, o) {
                                                          1 == o ? ((t = 0), (e = 0)) : (e = 10 * (o - 1)),
                                                              (t = e),
                                                              i(e + ",10");
                                                      },
                                                  });
                                          }));
                                } else $(".pagination-sm").hide(), r.empty();
                            });
                    }
                    re.stop(),
                        $("#dateFilter").change(function (t) {
                            (n = 1), (o = $(t.target).val()), a(10);
                        }),
                        $("#clear_filter").click(function () {
                            (n = 0), (o = null), a(10);
                        }),
                        a(10),
                        fetch("action/totalPaymentAmountAndDueData.php")
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (t) {
                                t.length && ($("#totalAmount").text(t[0].totalAmount), $("#dueAmount").text(t[0].totalDue));
                            });
                },
            },
            {
                namespace: "due",
                beforeEnter: function () {
                    var t = 0;
                    re.load(), ee.active("accounts"), ne.update("Pending Due", ee.current().find("i")[0].outerHTML);
                    var e = new Qt($("#due_tbl")[0]);
                    fetch("action/fetchAllPaymentsDue.php")
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (n) {
                            console.log(n),
                                n.length
                                    ? (re.stop(),
                                      console.log(n),
                                      n.map(function (n) {
                                          t++;
                                          var o = n.courseId,
                                              r = n.studentId,
                                              i = n.name,
                                              a = n.course,
                                              s = n.dueAmount,
                                              c = n.dueDate,
                                              u = [
                                                  t,
                                                  i,
                                                  a,
                                                  '<span style="color : red; font-size : 20px; font-weight : 500;">'.concat(
                                                      s,
                                                      "</span>"
                                                  ),
                                                  c,
                                              ];
                                          e.addRow(u),
                                              e.actions({ view: "student-info.html?id=" + r + "&cid=" + o + "&trigger" });
                                      }))
                                    : (e.empty(), re.stop());
                        });
                },
            },
            {
                namespace: "declined_admission",
                beforeEnter: function () {
                    var t = 0;
                    re.load(),
                        ee.active("admission"),
                        ne.update("Rejected Admissions", ee.current().find("i")[0].outerHTML),
                        re.stop(),
                        fetch("action/fetchAllRejectedAdmission.php")
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (n) {
                                n.length
                                    ? (re.stop(),
                                      n.map(function (n) {
                                          t++;
                                          var o = n.id,
                                              r = n.name,
                                              i = n.email,
                                              a = n.course,
                                              s = [t, r, i, a];
                                          e.addRow(s), e.actions({ view: "admission-info.html?id=" + o });
                                      }))
                                    : (e.empty(), re.stop());
                            });
                    var e = new Qt("#declined_admission");
                },
            },
            {
                namespace: "list_student",
                beforeEnter: function () {
                    var t = 0,
                        e = 0;
                    re.load(), ee.active("students"), ne.update("Students", ee.current().find("i")[0].outerHTML);
                    var n = new Qt("#student_list_table");
                    function o(e) {
                        fetch("action/fetchAllStudents.php?limit=" + e)
                            .then(function (t) {
                                return t.json();
                            })
                            .then(function (e) {
                                re.stop(),
                                    e.length
                                        ? (re.stop(),
                                          e.map(function (e) {
                                              t++;
                                              var o = e.id,
                                                  r = e.name,
                                                  i = e.email,
                                                  a = [t, r, i];
                                              n.addRow(a), n.actions({ view: "student-info.html?id=" + o });
                                          }))
                                        : (n.empty(), re.stop());
                            });
                    }
                    fetch("action/splitPageStudents.php?limit=10")
                        .then(function (t) {
                            return t.json();
                        })
                        .then(function (n) {
                            if ("" != n[0].length) {
                                var r = n[0].length;
                                1 == r && o((e = 0) + ",10"),
                                    $.getScript("http://localhost/medic/src/plugin/pagination.js", function () {
                                        $("#pagination-demo").twbsPagination({
                                            totalPages: r,
                                            visiblePages: 10,
                                            onPageClick: function (n, r) {
                                                1 == r ? ((t = 0), (e = 0)) : (e = 10 * (r - 1)), (t = e), o(e + ",10");
                                            },
                                        });
                                    });
                            }
                        });
                },
            },
            {
                namespace: "student_inner",
                beforeEnter: function () {
                    re.load(), ee.active("students"), ne.update("Students", ee.current().find("i")[0].outerHTML);
                    var t = null,
                        e = null,
                        n = window.location.href,
                        o = n.split("&")[2];
                    "trigger" == o
                        ? ($("#course-tab-button").click(),
                          (t = n.split("&")[0].split("=")[1]),
                          (e = location.href.split("&")[1].split("=")[1]))
                        : (t = n.split("=")[1]);
                    var r = new Promise(function (e, n) {
                            fetch("action/fetchStudentBasicDetails.php?id=" + t)
                                .then(function (t) {
                                    return t.json();
                                })
                                .then(function (t) {
                                    return e(t);
                                });
                        }),
                        i = new Promise(function (e, n) {
                            fetch("action/fetchCourseDetails.php?id=" + t)
                                .then(function (t) {
                                    return t.json();
                                })
                                .then(function (t) {
                                    return e(t);
                                });
                        }),
                        a = new Promise(function (e, n) {
                            fetch("action/fetchStudentPaymentDetails.php?id=" + t)
                                .then(function (t) {
                                    return t.json();
                                })
                                .then(function (t) {
                                    return e(t);
                                });
                        }),
                        s = new Promise(function (e, n) {
                            fetch("action/fetchPaymentDue.php?id=" + t)
                                .then(function (t) {
                                    return t.json();
                                })
                                .then(function (t) {
                                    return e(t);
                                });
                        });
                    Promise.all([r, i, a, s]).then(function (n) {
                        re.stop(), console.log(n);
                        var o = n[0][0],
                            r = o.name,
                            i = o.phone,
                            a = o.email,
                            s = o.alt_phone,
                            c = o.pincode,
                            u = o.added_date,
                            l = o.address,
                            d = o.qualification;
                        $("#student_name").text(r),
                            $("#student_join_date").text(u),
                            $("#student_phone").text(i),
                            $("#fullName").val(r),
                            $("#email").val(a),
                            $("#mobile").val(i),
                            $("#alt_phone").val(s),
                            $("#qualification").val(d),
                            $("#pincode").val(c),
                            $("#address").val(l),
                            n[1].map(function (t) {
                                var e = t || {},
                                    n = e.courseId,
                                    o = e.courseName,
                                    r = e.courseFee,
                                    i = e.university,
                                    a = e.sessionInfo,
                                    s = e.courseStatus,
                                    c = e.dueDate,
                                    u = e.dueAmount,
                                    l = '\n                        <div class="card" data-course-id="'
                                        .concat(n, '">\n                            <p class="course-name">')
                                        .concat(o, '</p>\n                            <p class="university-name infos">')
                                        .concat(
                                            i,
                                            '</p>\n                            <p class="course-fee infos"> Course Fee : <span style="font-size : 18px;"> &nbsp; '
                                        )
                                        .concat(
                                            r,
                                            '</span></p>\n                            <p class="course-fee infos"> Course Due : <span style="font-size : 18px;"> &nbsp; '
                                        )
                                        .concat(
                                            u,
                                            '</span></p>\n\n                            <div class="session_list">\n                            <ul>'
                                        );
                                a &&
                                    a.map(function (t) {
                                        var e = t.session_id,
                                            o = t.session_name,
                                            r = t.visible_status;
                                        l +=
                                            '<li>\n                                                <div class="session-title">'
                                                .concat(
                                                    o,
                                                    "</div>\n                                                <button data-course-id="
                                                )
                                                .concat(n, ' data-session-id="')
                                                .concat(e, '" class="session_status_btn ')
                                                .concat(1 == r ? "re-activate" : "", '" data-current-status="')
                                                .concat(1 == r ? "true" : "false", '">')
                                                .concat(
                                                    1 == r ? "Disable" : "Activate",
                                                    "</button>\n                                              </li>"
                                                );
                                    }),
                                    (l +=
                                        '</ul>\n                            </div>\n                            <br/>\n                            <div class="course_options">\n                                <div class="option-box block-course" data-current-status="'
                                            .concat(2 == s ? "true" : "false", '" style="')
                                            .concat(2 == s ? "background : orange;" : "red", '" data-course-id="')
                                            .concat(n, '">\n\n                                    <p>')
                                            .concat(
                                                2 == s ? "Unblock Course" : "Block Course",
                                                "</p>\n                                </div>\n\n\n\n\n                            </div>"
                                            )),
                                    0 != u &&
                                        (l +=
                                            '<div class="form-group">\n                                    <label>Set next due date</label>\n                                    <input type="date" value="'.concat(
                                                c,
                                                '" class="setDueDate" />\n                                    <div class="hint" style="display : none; width : 100%; margin-top : 5px; font-weight : bold;"><i class="fas fa-history"></i> &nbsp;Set New Due Date</div>\n                                </div>'
                                            )),
                                    (l += "</div>"),
                                    $(".cards-holder").append(l);
                            }),
                            e &&
                                $(".card").each(function () {
                                    var t = $(this).attr("data-course-id");
                                    console.log(t),
                                        t == e
                                            ? ($(this)[0].scrollIntoView(),
                                              $(this).css({ background: "#ddffdd", transition: "0.5s" }),
                                              $(this).find("hint").show(),
                                              $(this).find("input").css({ border: "1px solid red" }))
                                            : $(this).css({ pointerEvents: "none", cursor: "not-allowed", opacity: 0.5 });
                                }),
                            $(".session_status_btn")
                                .off("click")
                                .click(function (e) {
                                    e.preventDefault();
                                    var n = $(this).attr("data-course-id"),
                                        o = $(this).attr("data-session-id"),
                                        r = $(this).attr("data-current-status");
                                    $(this),
                                        "true" == r
                                            ? ($(this).css({ background: "#eee", color: "#2f1c6a" }).text("Activate"),
                                              $(this).attr("data-current-status", !1))
                                            : ($(this).css({ background: "orange", color: "#2f1c6a" }).text("Disable"),
                                              $(this).attr("data-current-status", !0)),
                                        fetch("action/unloackStudentCourse.php", {
                                            method: "post",
                                            headers: { contentType: "application/json" },
                                            body: JSON.stringify({
                                                courseId: n,
                                                sessionId: o,
                                                currentStatus: r,
                                                studentId: t,
                                            }),
                                        })
                                            .then(function (t) {
                                                return t.text();
                                            })
                                            .then(function (t) {
                                                console.log(t);
                                            });
                                }),
                            $(".block-course").click(function () {
                                var e = $(this).attr("data-current-status"),
                                    n = $(this).attr("data-course-id");
                                "false" == e
                                    ? ($(this).css({ background: "orange", color: "white" }).text("Unblock Course"),
                                      $(this).attr("data-current-status", "true"),
                                      oe.trigger({ content: "Blocked the course", type: "success", timeout: 2e3 }))
                                    : ($(this).css({ background: "red", color: "white" }).text("Block Course"),
                                      $(this).attr("data-current-status", "false"),
                                      oe.trigger({ content: "Unblocked the course", type: "success", timeout: 2e3 })),
                                    fetch("action/blockCourseStudent.php", {
                                        method: "post",
                                        headers: { contentType: "application/json" },
                                        body: JSON.stringify({ courseId: n, status: e, studentId: t }),
                                    })
                                        .then(function (t) {
                                            return t.text();
                                        })
                                        .then(function (t) {
                                            console.log(t);
                                        });
                            }),
                            $(".setDueDate").on("change", function () {
                                var n = $(this).closest(".card").attr("data-course-id"),
                                    o = $(this).val();
                                fetch("action/updateFollowUp.php", {
                                    method: "post",
                                    headers: { contentType: "application/json" },
                                    body: JSON.stringify({ courseId: null == e ? n : e, studentId: t, dueDate: o }),
                                })
                                    .then(function (t) {
                                        return t.text();
                                    })
                                    .then(function (t) {
                                        console.log(t),
                                            1 == t &&
                                                (oe.trigger({
                                                    content: "New due date added",
                                                    timeout: 2e3,
                                                    type: "success",
                                                }),
                                                setTimeout(function () {
                                                    history.back();
                                                }, 2e3));
                                    });
                            });
                        var f = 0;
                        n[2].map(function (t) {
                            f++;
                            var e = t.amount,
                                n = t.courseName,
                                o = t.date,
                                r = t.time;
                            $("#Lesson_table tbody").append(
                                "\n                            <tr>\n                                <th>"
                                    .concat(f, "</th>\n                                <th>")
                                    .concat(
                                        n,
                                        '</th>\n                                <th><i class="fas fa-rupee-sign"></i> &nbsp; '
                                    )
                                    .concat(e, "</th>\n                                <th>")
                                    .concat(o, "</th>\n                                <th>")
                                    .concat(r, "</th>\n                            </tr>\n                        ")
                            );
                        });
                        var h = n[3][0].due_amount;
                        $("#paymentDue").text(h + "/-");
                    });
                    var c = $(".tab a");
                    c.click(function (t) {
                        t.preventDefault();
                        var e = $(t.target).attr("data-for"),
                            n = $(".view");
                        c.removeClass("active-tab"),
                            $(t.target).addClass("active-tab"),
                            n.each(function () {
                                var t = $($(this)).attr("data-for");
                                if (e == t) {
                                    var o = $(this);
                                    n.hide(), o.show();
                                }
                            });
                    }),
                        "trigger" == o && $("#course-tab-button").click();
                },
            },
        ],
    });
})();
