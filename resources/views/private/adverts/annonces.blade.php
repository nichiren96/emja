@extends('layouts.main')

@section('pageTitle', 'Emploi Mahajanga - Ajouter votre annonce')
@section('home', 'active')

@section('content')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    <aside class="col-lg-3 column border-right">
                        <div class="widget">
                            <div class="tree_widget-sec">
                                <ul>
                                    <li class="">
                                        <a href="dashbord_employer.php" title=""><i class="la la-briefcase"></i>Gérer les emplois</a>
                                    </li>
                                    <li class="inner-child">
                                        <a href="add_job.php" title=""><i class="la la-file-text"></i> Publier un nouvel emploi</a>
                                    </li>
                                    <li class="">
                                        <a href="packages.php" title=""><i class="la la-file-text"></i>Packages</a>
                                    </li>
                                    <li class="">
                                        <a href="transactions.php" title=""><i class="la la-money"></i>Transactions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="profile-title">
                                <h3>Publier un nouvel emploi</h3>
                                <div class="steps-sec">
                                    <div class="step active">
                                        <p><i class="la la-info"></i></p>
                                        <span>Informations</span>
                                    </div>
                                    <div class="step">
                                        <p><i class="la la-cc-mastercard"></i></p>
                                        <span>Paquet et paiements</span>
                                    </div>
                                    <div class="step">
                                        <p><i class="la  la-check-circle"></i></p>
                                        <span>Terminé</span>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-form-edit">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Titre d'Emploi</span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Designer" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Description</span>
                                            <div class="pf-field">
                                                <textarea>Spent several years working on sheep on Wall Street. Had moderate success investing in Yugos on Wall Street. Managed a small team buying and selling pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed severalnew methods for working with banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer ollaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Type d'emploi</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Categories</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Salaire offert</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Niveau de carrière</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Experiences</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Le genre</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Industrie</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Qualification</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Date limite d'inscription</span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="01.11.207"  class="form-control datepicker" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Exigences de compétence</span>
                                            <div class="pf-field">
                                                <ul class="tags">
                                                    <li class="addedTag">Photoshop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
                                                    <li class="tagAdd taglist">
                                                        <input type="text" id="search-field">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Pays</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Ville</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen">
                                                    <option>Web Development</option>
                                                    <option>Web Designing</option>
                                                    <option>Art & Culture</option>
                                                    <option>Reading & Writing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Adresse complète</span>
                                            <div class="pf-field">
                                                <textarea>Collins Street West, Victoria 8007, Australia.</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <button type="submit">Publier</button>
                                            <button type="submit">Brouillon</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="contact-edit">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection