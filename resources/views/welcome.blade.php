<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Nusantara UI Kit</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card card-body mb-3">
            <input type="text" class="form-control" placeholder="Testing" />

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Testing" id="testing" />
                <label for="testing">Test</label>
            </div>
        </div>

        <div class="card card-body mb-3 flex-row">
            <div id="modal-small">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSmall">
                    Modal Small
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalSmall" tabindex="-1" aria-labelledby="modalSmallLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalSmallLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="modal-regular">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                    Modal Regular
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="modal-large">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLarge">
                    Modal Large
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalLarge" tabindex="-1" aria-labelledby="modalLargeLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLargeLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="modal-xlarge">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalXtraLarge">
                    Modal Extra Large
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalXtraLarge" tabindex="-1" aria-labelledby="modalXtraLargeLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalXtraLargeLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body mb-3">
            <div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables.">Custom tooltip</button>
                <a tabindex="0" class="btn btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
            </div>
        </div>

        <div class="card">
            <h3 class="card-header">Shadow</h3>
            <div class="card-body d-flex justify-content-between">
                <div class="p-3 shadow-sm">Halo</div>
                <div class="p-3 shadow">Halo</div>
                <div class="p-3 shadow-lg">Halo</div>
            </div>
        </div>

        <div class="card mt-3">
            <h3 class="card-header">Icon</h3>
            <div class="card-body">
                <i class="fa-solid fa-arrow-right"></i>
                <i data-feather="alert-triangle"></i>
                <i class="bx bxl-typescript"></i>
            </div>
        </div>

        <div class="mt-3 card">
            <h3 class="card-header">Color Schemes</h3>
            <div class="card-body">
                <div id="button" class="mb-3">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>

                    <button type="button" class="btn btn-link">Link</button>
                </div>
                <div class="d-flex gap-3 mb-3 flex-wrap justify-content-between">
                    <div class="p-4 rounded bg-primary">Hello</div>
                    <div class="p-4 rounded bg-secondary">Hello</div>
                    <div class="p-4 rounded bg-success">Hello</div>
                    <div class="p-4 rounded bg-danger">Hello</div>
                    <div class="p-4 rounded bg-warning">Hello</div>
                    <div class="p-4 rounded bg-dark">Hello</div>
                    <div class="p-4 rounded bg-info">Hello</div>
                </div>
                <div class="d-flex gap-3 mb-3 flex-wrap justify-content-between">
                    <div class="p-4 rounded bg-soft-primary">Hello</div>
                    <div class="p-4 rounded bg-soft-secondary">Hello</div>
                    <div class="p-4 rounded bg-soft-success">Hello</div>
                    <div class="p-4 rounded bg-soft-danger">Hello</div>
                    <div class="p-4 rounded bg-soft-warning">Hello</div>
                    <div class="p-4 rounded bg-soft-dark">Hello</div>
                    <div class="p-4 rounded bg-soft-info">Hello</div>
                </div>
                <div class="d-flex gap-3 mb-3 flex-wrap justify-content-between">
                    <div class="p-4 transition-200 transition-all rounded bg-hover-primary">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-hover-secondary">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-hover-success">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-hover-danger">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-hover-warning">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-hover-dark">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-hover-info">Hello</div>
                </div>
                <div class="d-flex gap-3 mb-3 flex-wrap justify-content-between">
                    <div class="p-4 transition-200 transition-all rounded bg-soft-hover-primary">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-soft-hover-secondary">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-soft-hover-success">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-soft-hover-danger">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-soft-hover-warning">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-soft-hover-dark">Hello</div>
                    <div class="p-4 transition-200 transition-all rounded bg-soft-hover-info">Hello</div>
                </div>
                <div class="d-flex gap-3 flex-wrap justify-content-between">
                    <div class="p-4 rounded bg-gray-100">Hello</div>
                    <div class="p-4 rounded bg-gray-200">Hello</div>
                    <div class="p-4 rounded bg-gray-300">Hello</div>
                    <div class="p-4 rounded bg-gray-400">Hello</div>
                    <div class="p-4 rounded bg-gray-500">Hello</div>
                    <div class="p-4 rounded bg-gray-600">Hello</div>
                    <div class="p-4 rounded bg-gray-700">Hello</div>
                    <div class="p-4 rounded bg-gray-800">Hello</div>
                    <div class="p-4 rounded bg-gray-900">Hello</div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="card-header-title">
                    <h3 class="card-title">Alert</h3>
                    <div class="card-subtitle">Showing regular alert</div>
                </div>
                <div class="card-toolbar">
                    <div class="dropdown">
                        <button class="btn btn-toolbar btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-h"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="alert alert-soft-primary d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-soft-secondary d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-soft-success d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-soft-danger d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-soft-warning d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-soft-info d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-soft-light d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-soft-dark d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="alert alert-primary d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-secondary d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.ut!</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-success d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-warning d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-info d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-light d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                    <div class="alert alert-dark d-flex alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                        <div class="d-flex flex-column me-2">
                            <h3 class="alert-title">This is an alert</h3>
                            <div class="alert-text">The alert component can be used to highlight certain parts of your page for higher content visibility.</div>
                        </div>
                        <button data-bs-dismiss="alert" aria-label="Close" class="btn-alert-close btn">
                            <i class="fa-solid fa-close"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="card-header-title">
                    <h3 class="card-title">Badge</h3>
                    <div class="card-subtitle">Lorem ipsum dolor sit amet</div>
                </div>
            </div>
            <div class="card-body">
                <span class="badge text-bg-primary">Primary</span>
                <span class="badge text-bg-secondary">Secondary</span>
                <span class="badge text-bg-success">Success</span>
                <span class="badge text-bg-danger">Danger</span>
                <span class="badge text-bg-warning">Warning</span>
                <span class="badge text-bg-info">Info</span>
                <span class="badge text-bg-light">Light</span>
                <span class="badge text-bg-dark">Dark</span>

                <a href="javascript:void(0)" class="badge text-bg-primary">Primary</a>
                <a href="javascript:void(0)" class="badge text-bg-secondary">Secondary</a>
                <a href="javascript:void(0)" class="badge text-bg-success">Success</a>
                <a href="javascript:void(0)" class="badge text-bg-danger">Danger</a>
                <a href="javascript:void(0)" class="badge text-bg-warning">Warning</a>
                <a href="javascript:void(0)" class="badge text-bg-info">Info</a>
                <a href="javascript:void(0)" class="badge text-bg-light">Light</a>
                <a href="javascript:void(0)" class="badge text-bg-dark">Dark</a>
            </div>
            <div class="card-body">
                <span class="badge rounded-pill text-bg-primary">Primary</span>
                <span class="badge rounded-pill text-bg-secondary">Secondary</span>
                <span class="badge rounded-pill text-bg-success">Success</span>
                <span class="badge rounded-pill text-bg-danger">Danger</span>
                <span class="badge rounded-pill text-bg-warning">Warning</span>
                <span class="badge rounded-pill text-bg-info">Info</span>
                <span class="badge rounded-pill text-bg-light">Light</span>
                <span class="badge rounded-pill text-bg-dark">Dark</span>

                <a href="javascript:void(0)" class="badge rounded-pill text-bg-primary">Primary</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-secondary">Secondary</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-success">Success</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-danger">Danger</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-warning">Warning</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-info">Info</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-light">Light</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-dark">Dark</a>
            </div>
            <div class="card-body">
                <span class="badge text-bg-soft-primary">Primary</span>
                <span class="badge text-bg-soft-secondary">Secondary</span>
                <span class="badge text-bg-soft-success">Success</span>
                <span class="badge text-bg-soft-danger">Danger</span>
                <span class="badge text-bg-soft-warning">Warning</span>
                <span class="badge text-bg-soft-info">Info</span>
                <span class="badge text-bg-soft-light">Light</span>
                <span class="badge text-bg-soft-dark">Dark</span>

                <a href="javascript:void(0)" class="badge text-bg-soft-primary">Primary</a>
                <a href="javascript:void(0)" class="badge text-bg-soft-secondary">Secondary</a>
                <a href="javascript:void(0)" class="badge text-bg-soft-success">Success</a>
                <a href="javascript:void(0)" class="badge text-bg-soft-danger">Danger</a>
                <a href="javascript:void(0)" class="badge text-bg-soft-warning">Warning</a>
                <a href="javascript:void(0)" class="badge text-bg-soft-info">Info</a>
                <a href="javascript:void(0)" class="badge text-bg-soft-light">Light</a>
                <a href="javascript:void(0)" class="badge text-bg-soft-dark">Dark</a>
            </div>
            <div class="card-body">
                <span class="badge rounded-pill text-bg-soft-primary">Primary</span>
                <span class="badge rounded-pill text-bg-soft-secondary">Secondary</span>
                <span class="badge rounded-pill text-bg-soft-success">Success</span>
                <span class="badge rounded-pill text-bg-soft-danger">Danger</span>
                <span class="badge rounded-pill text-bg-soft-warning">Warning</span>
                <span class="badge rounded-pill text-bg-soft-info">Info</span>
                <span class="badge rounded-pill text-bg-soft-light">Light</span>
                <span class="badge rounded-pill text-bg-soft-dark">Dark</span>

                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-primary">Primary</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-secondary">Secondary</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-success">Success</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-danger">Danger</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-warning">Warning</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-info">Info</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-light">Light</a>
                <a href="javascript:void(0)" class="badge rounded-pill text-bg-soft-dark">Dark</a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="card-header-title">
                    <h3 class="card-title">Button</h3>
                    <div class="card-subtitle">Lorem ipsum dolor sit amet</div>
                </div>
            </div>
            <div class="card-body">
                <button class="btn btn-primary">Button</button>
                <button class="btn btn-secondary">Button</button>
                <button class="btn btn-success">Button</button>
                <button class="btn btn-danger">Button</button>
                <button class="btn btn-info">Button</button>
                <button class="btn btn-light">Button</button>
                <button class="btn btn-dark">Button</button>
                <button class="btn btn-warning">Button</button>
            </div>
            <div class="card-body">
                <button class="btn btn-s-primary">Button</button>
                <button class="btn btn-s-secondary">Button</button>
                <button class="btn btn-s-success">Button</button>
                <button class="btn btn-s-danger">Button</button>
                <button class="btn btn-s-info">Button</button>
                <button class="btn btn-s-light">Button</button>
                <button class="btn btn-s-dark">Button</button>
                <button class="btn btn-s-warning">Button</button>
            </div>
            <div class="card-body bg-dark">
                <button class="btn btn-w-primary">Button</button>
                <button class="btn btn-w-secondary">Button</button>
                <button class="btn btn-w-success">Button</button>
                <button class="btn btn-w-danger">Button</button>
                <button class="btn btn-w-info">Button</button>
                <button class="btn btn-w-light">Button</button>
                <button class="btn btn-w-dark">Button</button>
                <button class="btn btn-w-warning">Button</button>
            </div>
            <div class="card-body bg-dark">
                <button class="btn btn-ws-primary">Button</button>
                <button class="btn btn-ws-secondary">Button</button>
                <button class="btn btn-ws-success">Button</button>
                <button class="btn btn-ws-danger">Button</button>
                <button class="btn btn-ws-info">Button</button>
                <button class="btn btn-ws-light">Button</button>
                <button class="btn btn-ws-dark">Button</button>
                <button class="btn btn-ws-warning">Button</button>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="card-header-title">
                    <h3 class="card-title">CheckRadio Button</h3>
                    <div class="card-subtitle">Lorem ipsum dolor sit amet</div>
                </div>
            </div>
            <div class="card-body">
                <label for="form-1" class="checkradio indicator-rb has-indicator">
                    <input type="radio" name="test" id="form-1" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
                <label for="form-2" class="checkradio indicator-rb has-indicator">
                    <input type="radio" name="test" id="form-2" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
                <label for="form-3" class="checkradio indicator-rb has-indicator">
                    <input type="radio" name="test" id="form-3" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
                <label for="form-4" class="checkradio indicator-rb has-indicator">
                    <input type="radio" name="test" id="form-4" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
                <label for="form-5" class="checkradio indicator-rb has-indicator">
                    <input type="radio" name="test" id="form-5" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
                <label for="form-6" class="checkradio indicator-rb has-indicator">
                    <input type="radio" name="test" id="form-6" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
                <label for="form-7" class="checkradio indicator-rb has-indicator">
                    <input type="radio" name="test" id="form-7" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
                <label for="form-8" class="checkradio has-indicator">
                    <input type="radio" name="test" id="form-8" class="checkradio-input" />
                    <div class="checkradio-wrapper">
                        <div class="checkradio-title">Test</div>
                        <div class="checkradio-desc">This is a sample of checkbox and radio button that has been customized.</div>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
