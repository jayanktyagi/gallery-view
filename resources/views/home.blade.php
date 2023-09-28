<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        /* Custom styles for the project cards */
        .project-card {
            cursor: pointer;
            height: 100%;
            transition: transform 0.2s ease-in-out;
        }

        .project-card:hover {
            transform: scale(1.02);
        }
        .truncate-text {
        width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- Search input -->
                <input type="text" class="form-control mb-3" id="searchInput" placeholder="Search...">
            </div>
        </div>
        <div class="row" id="projectList">
            <!-- Project cards will be displayed here -->
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3 project-card"
            data-technologies="{{ $project->Project_Technologies }}"
            data-frontend-skills="{{ $project->Technical_Skillset_Frontend }}"
            data-backend-skills="{{ $project->Technical_Skillset_Backend }}">
                    <div class="card" onclick="showModal('projectModal{{$project->id}}')">
                        <div class="card-header">
                            {{ $project->Project_Title }}
                        </div>
                        <div class="card-body">
                            <p><strong>Project Technologies:</strong>  <span class="truncate-text">{{ $project->Project_Technologies }}</span></p>
                            <p><strong>Frontend Skills:</strong> <span class="truncate-text"> {{ $project->Technical_Skillset_Frontend }}</span></p>
                            <p><strong>Backend Skills:</strong>  <span class="truncate-text">{{ $project->Technical_Skillset_Backend }}</span></p>
                            <p><strong>Database Skills:</strong> <span class="truncate-text"> {{ $project->Technical_Skillset_Databases }}</span></p>
                            <p><strong>Infrastructure Skills:</strong> <span class="truncate-text">{{ $project->Technical_Skillset_Infrastructre }}<span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @foreach ($projects as $project)
        <div class="modal fade" id="projectModal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$project->Project_Title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Project Technologies:</strong> {{ $project->Project_Technologies }}</p>
                        <p><strong>Frontend Skills:</strong> {{ $project->Technical_Skillset_Frontend }}</p>
                        <p><strong>Backend Skills:</strong> {{ $project->Technical_Skillset_Backend }}</p>
                        <p><strong>Database Skills:</strong> {{ $project->Technical_Skillset_Databases }}</p>
                        <p><strong>Infrastructure Skills:</strong> {{ $project->Technical_Skillset_Infrastructre }}</p>
                        <p><strong>Other Information:</strong> {{ $project->Other_Information_Availability}}</p>
                        <!-- Add more details here as needed -->
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function showModal(modalId) {
            var myModal = new bootstrap.Modal(document.getElementById(modalId));
            myModal.show();
        }

            // Function to perform project filtering
            function filterProjects() {
        var searchQuery = document.getElementById("searchInput").value.toLowerCase();

        // Split the search query into individual search terms
        var searchTerms = searchQuery.split(/\s+/);

        // Create an array of regex patterns for each search term
        var regexPatterns = searchTerms.map(function(term) {
            return new RegExp(term, "i"); // "i" flag for case-insensitive matching
        });

        // Loop through project cards and show/hide based on the search query
        var projectCards = document.querySelectorAll(".project-card");
        projectCards.forEach(function(card) {
            var technologies = card.getAttribute("data-technologies").toLowerCase();
            var frontendSkills = card.getAttribute("data-frontend-skills").toLowerCase();
            var backendSkills = card.getAttribute("data-backend-skills").toLowerCase();
            
            // Use Array.prototype.every to check if all search terms match
            var allTermsMatch = regexPatterns.every(function(pattern) {
                return pattern.test(technologies) || pattern.test(frontendSkills) || pattern.test(backendSkills);
            });

            if (allTermsMatch) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }


        // Attach the filterProjects function to the input element's "input" event
        document.getElementById("searchInput").addEventListener("input", filterProjects);
    </script>
</body>
</html>
