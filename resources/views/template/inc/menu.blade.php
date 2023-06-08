              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('dashboard') }}">
                          <span class="nav-link-title">
                              Dashboard
                          </span>
                      </a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                          data-bs-auto-close="outside" role="button" aria-expanded="false">
                          <span class="nav-link-title">
                              Daftar
                          </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('formulir') }}" target="_blank" rel="noopener">
                            Isi Formulir
                          </a>
                          <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                              Detail Formulir
                          </a>
                          <a class="dropdown-item" href="./changelog.html">
                              Card
                          </a>
                          <a class="dropdown-item" href="./changelog.html">
                              Nilai Kelulusan
                          </a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('categories') }}">
                          <span class="nav-link-title">
                              categories
                          </span>
                      </a>
                  </li>


              </ul>
