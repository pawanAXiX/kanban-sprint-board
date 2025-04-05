export const themes = [
    {
        id: 0,
        name: "Minimal Blue Theme",
        theme: {
            'not started': {
                bg: "bg-blue-50",
                header: "bg-blue-500 text-white font-medium shadow-sm",
            },
            'in progress': {
                bg: "bg-green-50",
                header: "bg-green-500 text-white font-medium shadow-sm",
            },
            done: {
                bg: "bg-amber-50",
                header: "bg-amber-700 text-white font-medium shadow-sm",
            },
            archived: {
                bg: "bg-gray-100",
                header: "bg-gray-500 text-white font-medium shadow-sm",
            }
        },
        addButton: "bg-blue-500 border-0 hover:bg-blue-600 text-white rounded-lg px-3 py-2 text-sm font-medium shadow-sm transition-colors duration-150",
        background: "bg-gray-50",
        border: "border border-gray-200 rounded-xl shadow-sm",
        text: "text-gray-800",
        columnHover: "hover:shadow-md transition-shadow duration-200"
    },
    {
        id: 1,
        name: "Soft Gradient Theme",
        theme: {
            'not started': {
                bg: "bg-cyan-50",
                header: "bg-cyan-500 text-white font-medium shadow-sm",
            },
            'in progress': {
                bg: "bg-purple-50",
                header: "bg-purple-600 text-white font-medium shadow-sm",
            },
            done: {
                bg: "bg-orange-50",
                header: "bg-orange-500 text-white font-medium shadow-sm",
            },
            archived: {
                bg: "bg-slate-100",
                header: "bg-slate-500 text-white font-medium shadow-sm",
            }
        },
        addButton: "bg-cyan-500 border-0 hover:bg-cyan-600 text-white rounded-lg px-3 py-2 text-sm font-medium shadow-sm transition-colors duration-150",
        background: "bg-gray-50",
        border: "border border-gray-100 rounded-xl shadow-sm",
        text: "text-gray-700",
        columnHover: "hover:shadow-md transition-shadow duration-200"
    },
    {
        id: 2,
        name: "Pastel Theme",
        theme: {
            'not started': {
                bg: "bg-amber-100",
                header: "bg-amber-400 text-white font-medium shadow-sm",
            },
            'in progress': {
                bg: "bg-green-100",
                header: "bg-green-400 text-white font-medium shadow-sm",
            },
            done: {
                bg: "bg-blue-100",
                header: "bg-blue-400 text-white font-medium shadow-sm",
            },
            archived: {
                bg: "bg-purple-100",
                header: "bg-purple-400 text-white font-medium shadow-sm",
            }
        },
        addButton: "bg-slate-500 border-0 hover:bg-slate-600 text-white rounded-lg px-3 py-2 text-sm font-medium shadow-sm transition-colors duration-150",
        background: "bg-gray-50",
        border: "border border-gray-200 rounded-xl shadow-sm",
        text: "text-gray-700",
        columnHover: "hover:shadow-md transition-shadow duration-200"
    },
    {
        id: 3,
        name: "Monochromatic Theme",
        theme: {
            'not started': {
                bg: "bg-indigo-50",
                header: "bg-indigo-500 text-white font-medium shadow-sm",
            },
            'in progress': {
                bg: "bg-indigo-100",
                header: "bg-indigo-600 text-white font-medium shadow-sm",
            },
            done: {
                bg: "bg-indigo-200",
                header: "bg-indigo-700 text-white font-medium shadow-sm",
            },
            archived: {
                bg: "bg-indigo-300",
                header: "bg-indigo-800 text-white font-medium shadow-sm",
            }
        },
        addButton: "bg-indigo-500 border-0 hover:bg-indigo-600 text-white rounded-lg px-3 py-2 text-sm font-medium shadow-sm transition-colors duration-150",
        background: "bg-indigo-50",
        border: "border border-indigo-100 rounded-xl shadow-sm",
        text: "text-indigo-900",
        columnHover: "hover:shadow-md transition-shadow duration-200"
    },
    {
        id: 4,
        name: "Modern Dark Theme",
        theme: {
            'not started': {
                bg: "bg-slate-700",
                header: "bg-slate-300 text-white font-medium shadow-sm",
            },
            'in progress': {
                bg: "bg-slate-600",
                header: "bg-slate-400 text-white font-medium shadow-sm",
            },
            done: {
                bg: "bg-slate-500",
                header: "bg-slate-500 text-white font-medium shadow-sm",
            },
            archived: {
                bg: "bg-slate-400",
                header: "bg-slate-600 text-white font-medium shadow-sm",
            }
        },
        addButton: "bg-teal-500 border-0 hover:bg-teal-600 text-white rounded-lg px-3 py-2 text-sm font-medium shadow-sm transition-colors duration-150",
        background: "bg-slate-800",
        border: "border border-slate-600 rounded-xl shadow-sm",
        text: "text-gray-100",
        columnHover: "hover:shadow-md hover:shadow-slate-700/30 transition-shadow duration-200"
    }
];

export default themes;


