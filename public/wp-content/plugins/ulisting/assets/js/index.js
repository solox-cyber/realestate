!function(e) {
	var t = {};

	function n(r) {
		if (t[r]) return t[r].exports;
		var o = t[r] = {i: r, l: !1, exports: {}};
		return e[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
	}

	n.m = e, n.c = t, n.d = function(e, t, r) {
		n.o(e, t) || Object.defineProperty(e, t, {configurable: !1, enumerable: !0, get: r})
	}, n.r = function(e) {
		Object.defineProperty(e, "__esModule", {value: !0})
	}, n.n = function(e) {
		var t = e && e.__esModule ? function() {
			return e.default
		} : function() {
			return e
		};
		return n.d(t, "a", t), t
	}, n.o = function(e, t) {
		return Object.prototype.hasOwnProperty.call(e, t)
	}, n.p = "", n(n.s = 17)
}([function(e, t) {
	!function() {
		e.exports = this.wp.element
	}()
}, function(e, t) {
	e.exports = lodash
}, function(e, t) {
	!function() {
		e.exports = this.wp.i18n
	}()
}, function(e, t) {
	e.exports = function(e) {
		if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
		return e
	}
}, function(e, t, n) {
	var r = n(7);
	e.exports = function(e) {
		for (var t = 1; t < arguments.length; t++) {
			var n = null != arguments[t] ? arguments[t] : {}, o = Object.keys(n);
			"function" == typeof Object.getOwnPropertySymbols && (o = o.concat(Object.getOwnPropertySymbols(n).filter(function(e) {
				return Object.getOwnPropertyDescriptor(n, e).enumerable
			}))), o.forEach(function(t) {
				r(e, t, n[t])
			})
		}
		return e
	}
}, function(e, t) {
	!function() {
		e.exports = this.wp.components
	}()
}, function(e, t) {
	!function() {
		e.exports = this.wp.apiFetch
	}()
}, function(e, t) {
	e.exports = function(e, t, n) {
		return t in e ? Object.defineProperty(e, t, {
			value: n,
			enumerable: !0,
			configurable: !0,
			writable: !0
		}) : e[t] = n, e
	}
}, function(e, t) {
	!function() {
		e.exports = this.wp.url
	}()
}, function(e, t) {
	!function() {
		e.exports = this.wp.compose
	}()
}, function(e, t) {
	!function() {
		e.exports = this.wp.data
	}()
}, function(e, t, n) {
	var r = n(18);
	e.exports = function(e, t) {
		if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
		e.prototype = Object.create(t && t.prototype, {
			constructor: {
				value: e,
				writable: !0,
				configurable: !0
			}
		}), t && r(e, t)
	}
}, function(e, t) {
	function n(t) {
		return e.exports = n = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
			return e.__proto__ || Object.getPrototypeOf(e)
		}, n(t)
	}

	e.exports = n
}, function(e, t, n) {
	var r = n(19), o = n(3);
	e.exports = function(e, t) {
		return !t || "object" !== r(t) && "function" != typeof t ? o(e) : t
	}
}, function(e, t) {
	function n(e, t) {
		for (var n = 0; n < t.length; n++) {
			var r = t[n];
			r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
		}
	}

	e.exports = function(e, t, r) {
		return t && n(e.prototype, t), r && n(e, r), e
	}
}, function(e, t) {
	e.exports = function(e, t) {
		if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
	}
}, function(e, t, n) {
	var r = n(22), o = n(21), a = n(20);
	e.exports = function(e) {
		return r(e) || o(e) || a()
	}
}, function(e, t, n) {
	"use strict";
	n.r(t);
	var r = n(7), o = n.n(r), a = n(16), i = n.n(a), c = n(4), s = n.n(c), u = n(15), l = n.n(u), m = n(14), f = n.n(m),
		p = n(13), d = n.n(p), h = n(12), b = n.n(h), y = n(3), g = n.n(y), v = n(11), _ = n.n(v), O = n(0), x = n(1),
		j = n(2), T = n(5), w = n(10), S = n(9), k = n(6), P = n.n(k), C = n(8);

	function F(e) {
		var t = e.map(function(e) {
			return s()({children: [], parent: null}, e)
		}), n = Object(x.groupBy)(t, "parent");
		if (n.null && n.null.length) return t;
		return function e(t) {
			return t.map(function(t) {
				var r = n[t.id];
				return s()({}, t, {children: r && r.length ? e(r) : []})
			})
		}(n[0] || [])
	}

	var A = {per_page: -1, orderby: "name", order: "asc", _fields: "id,name,parent"}, E = function(e) {
		function t() {
			var e;
			return l()(this, t), (e = d()(this, b()(t).apply(this, arguments))).findTerm = e.findTerm.bind(g()(e)), e.onChange = e.onChange.bind(g()(e)), e.onChangeFormName = e.onChangeFormName.bind(g()(e)), e.onChangeFormParent = e.onChangeFormParent.bind(g()(e)), e.onAddTerm = e.onAddTerm.bind(g()(e)), e.onToggleForm = e.onToggleForm.bind(g()(e)), e.setFilterValue = e.setFilterValue.bind(g()(e)), e.sortBySelected = e.sortBySelected.bind(g()(e)), e.state = {
				loading: !0,
				availableTermsTree: [],
				availableTerms: [],
				adding: !1,
				formName: "",
				formParent: "",
				showForm: !1,
				filterValue: "",
				filteredTermsTree: []
			}, e
		}

		return _()(t, e), f()(t, [{
			key: "onChange", value: function(e) {
				var t = this.props, n = t.onUpdateTerms, r = t.taxonomy;
				n([parseInt(e.target.value, 10)], r.rest_base)
			}
		}, {
			key: "onChangeFormName", value: function(e) {
				var t = "" === e.target.value.trim() ? "" : e.target.value;
				this.setState({formName: t})
			}
		}, {
			key: "onChangeFormParent", value: function(e) {
				this.setState({formParent: e})
			}
		}, {
			key: "onToggleForm", value: function() {
				this.setState(function(e) {
					return {showForm: !e.showForm}
				})
			}
		}, {
			key: "findTerm", value: function(e, t, n) {
				return Object(x.find)(e, function(e) {
					return (!e.parent && !t || parseInt(e.parent) === parseInt(t)) && e.name.toLowerCase() === n.toLowerCase()
				})
			}
		}, {
			key: "onAddTerm", value: function(e) {
				var t = this;
				e.preventDefault();
				var n = this.props, r = n.onUpdateTerms, o = n.taxonomy, a = n.terms, c = n.slug, u = this.state,
					l = u.formName, m = u.formParent, f = u.adding, p = u.availableTerms;
				if ("" !== l && !f) {
					var d = this.findTerm(p, m, l);
					if (d) return Object(x.some)(a, function(e) {
						return e === d.id
					}) || r([d.id], o.rest_base), void this.setState({formName: "", formParent: ""});
					this.setState({adding: !0}), this.addRequest = P()({
						path: "/wp/v2/".concat(o.rest_base),
						method: "POST",
						data: {name: l, parent: m || void 0}
					}), this.addRequest.catch(function(e) {
						return "term_exists" === e.code ? (t.addRequest = P()({
							path: Object(C.addQueryArgs)("/wp/v2/".concat(o.rest_base), s()({}, A, {
								parent: m || 0,
								search: l
							}))
						}), t.addRequest.then(function(e) {
							return t.findTerm(e, m, l)
						})) : Promise.reject(e)
					}).then(function(e) {
						var n = !!Object(x.find)(t.state.availableTerms, function(t) {
								return t.id === e.id
							}) ? t.state.availableTerms : [e].concat(i()(t.state.availableTerms)),
							a = Object(j.sprintf)(Object(j._x)("%s added", "term"), Object(x.get)(t.props.taxonomy, ["labels", "singular_name"], "category" === c ? Object(j.__)("Category") : Object(j.__)("Term")));
						t.props.speak(a, "assertive"), t.addRequest = null, t.setState({
							adding: !1,
							formName: "",
							formParent: "",
							availableTerms: n,
							availableTermsTree: t.sortBySelected(F(n))
						}), r([e.id], o.rest_base)
					}, function(e) {
						"abort" !== e.statusText && (t.addRequest = null, t.setState({adding: !1}))
					})
				}
			}
		}, {
			key: "componentDidMount", value: function() {
				this.fetchTerms()
			}
		}, {
			key: "componentWillUnmount", value: function() {
				Object(x.invoke)(this.fetchRequest, ["abort"]), Object(x.invoke)(this.addRequest, ["abort"])
			}
		}, {
			key: "componentDidUpdate", value: function(e) {
				this.props.taxonomy !== e.taxonomy && this.fetchTerms()
			}
		}, {
			key: "fetchTerms", value: function() {
				var e = this, t = this.props.taxonomy;
				t && (this.fetchRequest = P()({path: Object(C.addQueryArgs)("/wp/v2/".concat(t.rest_base), A)}), this.fetchRequest.then(function(t) {
					var n = e.sortBySelected(F(t));
					e.fetchRequest = null, e.setState({loading: !1, availableTermsTree: n, availableTerms: t})
				}, function(t) {
					"abort" !== t.statusText && (e.fetchRequest = null, e.setState({loading: !1}))
				}))
			}
		}, {
			key: "sortBySelected", value: function(e) {
				var t = this.props.terms, n = function e(n) {
					return -1 !== t.indexOf(n.id) || void 0 !== n.children && !!(n.children.map(e).filter(function(e) {
						return e
					}).length > 0)
				};
				return e.sort(function(e, t) {
					var r = n(e), o = n(t);
					return r === o ? 0 : r && !o ? -1 : !r && o ? 1 : 0
				}), e
			}
		}, {
			key: "setFilterValue", value: function(e) {
				var t = this.state.availableTermsTree, n = e.target.value,
					r = t.map(this.getFilterMatcher(n)).filter(function(e) {
						return e
					});
				this.setState({filterValue: n, filteredTermsTree: r});
				var o = function e(t) {
					for (var n = 0, r = 0; r < t.length; r++) n++, void 0 !== t[r].children && (n += e(t[r].children));
					return n
				}(r), a = Object(j.sprintf)(Object(j._n)("%d result found.", "%d results found.", o), o);
				this.props.debouncedSpeak(a, "assertive")
			}
		}, {
			key: "getFilterMatcher", value: function(e) {
				return function t(n) {
					if ("" === e) return n;
					var r = s()({}, n);
					return r.children.length > 0 && (r.children = r.children.map(t).filter(function(e) {
						return e
					})), (-1 !== r.name.toLowerCase().indexOf(e) || r.children.length > 0) && r
				}
			}
		}, {
			key: "renderTerms", value: function(e) {
				var t = this, n = this.props, r = n.terms, o = void 0 === r ? [] : r,
					a = n.taxonomy.hierarchical ? "hierarchical" : "non-hierarchical";
				return e.map(function(e) {
					var n = "editor-post-taxonomies-".concat(a, "-term-").concat(e.id);
					return Object(O.createElement)("div", {
						key: e.id,
						className: "editor-post-taxonomies__hierarchical-terms-choice"
					}, Object(O.createElement)("input", {
						id: n,
						className: "editor-post-taxonomies__hierarchical-terms-input",
						type: "radio",
						checked: -1 !== o.indexOf(e.id),
						value: e.id,
						onChange: t.onChange,
						name: "radio_tax_input-" + t.props.slug
					}), Object(O.createElement)("label", {htmlFor: n}, Object(x.unescape)(e.name)), !!e.children.length && Object(O.createElement)("div", {className: "editor-post-taxonomies__hierarchical-terms-subchoices"}, t.renderTerms(e.children)))
				})
			}
		}, {
			key: "render", value: function() {
				var e = this.props, t = e.slug, n = e.taxonomy, r = e.instanceId, o = e.hasCreateAction,
					a = e.hasAssignAction, i = n.hierarchical ? "hierarchical" : "non-hierarchical";
				if (!a) return null;
				var c = this.state, s = c.availableTermsTree, u = c.availableTerms, l = c.filteredTermsTree,
					m = c.formName, f = c.formParent, p = c.loading, d = c.showForm, h = c.filterValue,
					b = function(e, r, o) {
						return Object(x.get)(n, ["labels", e], "category" === t ? r : o)
					}, y = b("add_new_item", Object(j.__)("Add new category"), Object(j.__)("Add new term")),
					g = b("new_item_name", Object(j.__)("Add new category"), Object(j.__)("Add new term")),
					v = b("parent_item", Object(j.__)("Parent Category"), Object(j.__)("Parent Term")),
					_ = "— ".concat(v, " —"), w = y,
					S = "editor-post-taxonomies__".concat(i, "-terms-input-").concat(r),
					k = "editor-post-taxonomies__".concat(i, "-terms-filter-").concat(r),
					P = Object(x.get)(this.props.taxonomy, ["labels", "search_items"], Object(j.__)("Search Terms")),
					C = Object(x.get)(this.props.taxonomy, ["name"], Object(j.__)("Terms")), F = u.length >= 8;
				return [F && Object(O.createElement)("label", {
					key: "filter-label",
					htmlFor: k
				}, P), F && Object(O.createElement)("input", {
					type: "search",
					id: k,
					value: h,
					onChange: this.setFilterValue,
					className: "editor-post-taxonomies__hierarchical-terms-filter",
					key: "term-filter-input"
				}), Object(O.createElement)("div", {
					className: "editor-post-taxonomies__hierarchical-terms-list",
					key: "term-list",
					tabIndex: "0",
					role: "group",
					"aria-label": C
				}, this.renderTerms("" !== h ? l : s)), !p && o && Object(O.createElement)(T.Button, {
					key: "term-add-button",
					onClick: this.onToggleForm,
					className: "editor-post-taxonomies__hierarchical-terms-add",
					"aria-expanded": d,
					isLink: !0
				}, y), d && Object(O.createElement)("form", {
					onSubmit: this.onAddTerm,
					key: i + "-terms-form"
				}, Object(O.createElement)("label", {
					htmlFor: S,
					className: "editor-post-taxonomies__hierarchical-terms-label"
				}, g), Object(O.createElement)("input", {
					type: "text",
					id: S,
					className: "editor-post-taxonomies__hierarchical-terms-input",
					value: m,
					onChange: this.onChangeFormName,
					required: !0
				}), n.hierarchical && !!u.length && Object(O.createElement)(T.TreeSelect, {
					label: v,
					noOptionLabel: _,
					onChange: this.onChangeFormParent,
					selectedId: f,
					tree: s
				}), Object(O.createElement)(T.Button, {
					isDefault: !0,
					type: "submit",
					className: "editor-post-taxonomies__hierarchical-terms-submit"
				}, w))]
			}
		}]), t
	}(O.Component), N = Object(S.compose)([Object(w.withSelect)(function(e, t) {
		var n = t.slug, r = e("core/editor").getCurrentPost, o = (0, e("core").getTaxonomy)(n);
		return {
			hasCreateAction: !!o && Object(x.get)(r(), ["_links", "wp:action-create-" + o.rest_base], !1),
			hasAssignAction: !!o && Object(x.get)(r(), ["_links", "wp:action-assign-" + o.rest_base], !1),
			terms: o ? e("core/editor").getEditedPostAttribute(o.rest_base) : [],
			taxonomy: o
		}
	}), Object(w.withDispatch)(function(e) {
		return {
			onUpdateTerms: function(t, n) {
				e("core/editor").editPost(o()({}, n, t))
			}
		}
	}), T.withSpokenMessages, S.withInstanceId])(E);
	wp.hooks.addFilter("editor.PostTaxonomyType", "RB4T", function(e) {
		return function(t) {
			return RB4Tl18n.radio_taxonomies.indexOf(t.slug) >= 0 ? wp.element.createElement(N, t) : wp.element.createElement(e, t)
		}
	})
}, function(e, t) {
	function n(t, r) {
		return e.exports = n = Object.setPrototypeOf || function(e, t) {
			return e.__proto__ = t, e
		}, n(t, r)
	}

	e.exports = n
}, function(e, t) {
	function n(e) {
		return (n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
			return typeof e
		} : function(e) {
			return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
		})(e)
	}

	function r(t) {
		return "function" == typeof Symbol && "symbol" === n(Symbol.iterator) ? e.exports = r = function(e) {
			return n(e)
		} : e.exports = r = function(e) {
			return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : n(e)
		}, r(t)
	}

	e.exports = r
}, function(e, t) {
	e.exports = function() {
		throw new TypeError("Invalid attempt to spread non-iterable instance")
	}
}, function(e, t) {
	e.exports = function(e) {
		if (Symbol.iterator in Object(e) || "[object Arguments]" === Object.prototype.toString.call(e)) return Array.from(e)
	}
}, function(e, t) {
	e.exports = function(e) {
		if (Array.isArray(e)) {
			for (var t = 0, n = new Array(e.length); t < e.length; t++) n[t] = e[t];
			return n
		}
	}
}]);