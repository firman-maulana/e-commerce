@extends('layouts.app2')

@section('title', 'Tracking Pesanan')

@section('style')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: white;
            color: black;
            line-height: 1.6;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Header Section */
        .hero-section {
            background-color: #f8f9fa;
            padding: 80px 20px;
            text-align: center;
            margin-top: 40px;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .hero-section p {
            font-size: 1.1rem;
            color: black;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.8;
            font-family: 'Roboto', sans-serif;
        }

        /* Project Tracking Section */
        .tracking-section {
            padding: 60px 20px;
            background-color: white;
        }

        .project-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e9ecef;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .project-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .project-info h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-family: 'Poppins', sans-serif;
        }

        .project-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .project-stats {
            display: flex;
            gap: 30px;
            margin-bottom: 25px;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        .budget {
            color: #28a745;
        }

        .spent {
            color: #6c757d;
        }

        .days {
            color: #ff6b6b;
        }

        .submissions {
            color: #007bff;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #666;
            margin-top: 2px;
        }

        /* Progress Timeline */
        .progress-timeline {
            position: relative;
            margin: 30px 0;
            padding: 20px 0;
        }

        .timeline-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .timeline-line {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #e9ecef;
            transform: translateY(-50%);
            z-index: 1;
        }

        .timeline-progress {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: linear-gradient(90deg, #007bff, #0056b3);
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        .milestone {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            padding: 0 10px;
        }

        .milestone-dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #e9ecef;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .milestone.active .milestone-dot {
            background: #007bff;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        }

        .milestone.completed .milestone-dot {
            background: #28a745;
        }

        .milestone-label {
            font-size: 0.8rem;
            color: #666;
            margin-top: 8px;
            text-align: center;
            font-weight: 500;
        }

        .milestone-date {
            font-size: 0.75rem;
            color: #999;
            margin-top: 2px;
        }

        /* Team Member Section */
        .team-member {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .member-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .member-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .member-avatar.orange {
            background: linear-gradient(135deg, #ff9a56 0%, #ff6b6b 100%);
        }

        .member-avatar.purple {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #333;
        }

        .member-details h4 {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 2px;
            font-family: 'Poppins', sans-serif;
        }

        .member-role {
            font-size: 0.85rem;
            color: #666;
        }

        .member-location {
            font-size: 0.8rem;
            color: #999;
            margin-top: 2px;
        }

        .member-actions {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .btn {
            padding: 8px 20px;
            border: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #ddd;
            color: #666;
        }

        .btn-outline:hover {
            background: #f8f9fa;
            border-color: #007bff;
            color: #007bff;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .project-header {
                flex-direction: column;
                gap: 15px;
            }

            .project-stats {
                flex-wrap: wrap;
                gap: 15px;
            }

            .timeline-container {
                flex-wrap: wrap;
                gap: 10px 0;
            }

            .milestone-label {
                font-size: 0.7rem;
            }

            .team-member {
                flex-direction: column;
                gap: 20px;
                align-items: flex-start;
            }

            .member-actions {
                flex-direction: row;
                width: 100%;
            }

            .btn {
                flex: 1;
            }
        }
    </style>

@endsection

@section('content')
<section class="hero-section">
    <h1>Tracking</h1>
    <p>MANEVIZ is more than fashion — it's a movement born in Malang and built by Gen Z for Gen Z.</p>
</section>

<section class="tracking-section">
        <div class="container">
            <!-- Project 1: Event Organization Website -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-info">
                        <h3>Event Organization Website</h3>
                        <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu sem commodo sapien. Sed ut tellus vel nisi feugiat consectetur.</p>
                    </div>
                </div>

                <div class="project-stats">
                    <div class="stat-item">
                        <span class="stat-value budget">$40,000</span>
                        <span class="stat-label">budget</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value spent">$3700</span>
                        <span class="stat-label">spent</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value days">15</span>
                        <span class="stat-label">days left</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value submissions">2</span>
                        <span class="stat-label">docs submitted</span>
                    </div>
                </div>

                <div class="progress-timeline">
                    <div class="timeline-container">
                        <div class="timeline-line">
                            <div class="timeline-progress" style="width: 60%;"></div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Project Start</div>
                            <div class="milestone-date">01 Oct, 24</div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 1</div>
                            <div class="milestone-date">08 Nov, 24</div>
                        </div>
                        
                        <div class="milestone active">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 2</div>
                            <div class="milestone-date">15 Dec, 24</div>
                        </div>
                        
                        <div class="milestone">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 3</div>
                            <div class="milestone-date">22 Dec, 24</div>
                        </div>
                        
                        <div class="milestone">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 4</div>
                            <div class="milestone-date">29 Dec, 24</div>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-info">
                        <div class="member-avatar">GM</div>
                        <div class="member-details">
                            <h4>Gabriel Matula</h4>
                            <div class="member-role">UI Designer</div>
                            <div class="member-location">📍 Las Vegas, Nevada</div>
                            <div class="member-location">🕐 01:23 pm</div>
                        </div>
                    </div>
                    <div class="member-actions">
                        <button class="btn btn-outline">Contact</button>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Project 2: Health Mobile App Design -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-info">
                        <h3>Health Mobile App Design</h3>
                        <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu sem commodo sapien. Sed ut tellus vel nisi feugiat consectetur.</p>
                    </div>
                </div>

                <div class="project-stats">
                    <div class="stat-item">
                        <span class="stat-value budget">$40,000</span>
                        <span class="stat-label">budget</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value spent">$2500</span>
                        <span class="stat-label">spent</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value days">12</span>
                        <span class="stat-label">days left</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value submissions">3</span>
                        <span class="stat-label">docs submitted</span>
                    </div>
                </div>

                <div class="progress-timeline">
                    <div class="timeline-container">
                        <div class="timeline-line">
                            <div class="timeline-progress" style="width: 80%;"></div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Project Start</div>
                            <div class="milestone-date">01 Oct, 24</div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 1</div>
                            <div class="milestone-date">08 Nov, 24</div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 2</div>
                            <div class="milestone-date">15 Dec, 24</div>
                        </div>
                        
                        <div class="milestone active">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 3</div>
                            <div class="milestone-date">22 Dec, 24</div>
                        </div>
                        
                        <div class="milestone">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 4</div>
                            <div class="milestone-date">29 Dec, 24</div>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-info">
                        <div class="member-avatar orange">LA</div>
                        <div class="member-details">
                            <h4>Layla Amora</h4>
                            <div class="member-role">Web Expert</div>
                            <div class="member-location">📍 Las Vegas, Nevada</div>
                            <div class="member-location">🕐 11:23 pm</div>
                        </div>
                    </div>
                    <div class="member-actions">
                        <button class="btn btn-outline">Contact</button>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Project 3: Advance SEO Service -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-info">
                        <h3>Advance SEO Service</h3>
                        <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu sem commodo sapien. Sed ut tellus vel nisi feugiat consectetur.</p>
                    </div>
                </div>

                <div class="project-stats">
                    <div class="stat-item">
                        <span class="stat-value budget">$20,000</span>
                        <span class="stat-label">budget</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value spent">$1500</span>
                        <span class="stat-label">spent</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value days">2</span>
                        <span class="stat-label">days left</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value submissions">4</span>
                        <span class="stat-label">docs submitted</span>
                    </div>
                </div>

                <div class="progress-timeline">
                    <div class="timeline-container">
                        <div class="timeline-line">
                            <div class="timeline-progress" style="width: 100%;"></div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Project Start</div>
                            <div class="milestone-date">01 Oct, 24</div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 1</div>
                            <div class="milestone-date">08 Nov, 24</div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 2</div>
                            <div class="milestone-date">15 Dec, 24</div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 3</div>
                            <div class="milestone-date">22 Dec, 24</div>
                        </div>
                        
                        <div class="milestone completed">
                            <div class="milestone-dot"></div>
                            <div class="milestone-label">Milestone 4</div>
                            <div class="milestone-date">29 Dec, 24</div>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-info">
                        <div class="member-avatar purple">AF</div>
                        <div class="member-details">
                            <h4>Ansel Finn</h4>
                            <div class="member-role">SEO Expert</div>
                            <div class="member-location">📍 Las Vegas, Nevada</div>
                            <div class="member-location">🕐 4:23 pm</div>
                        </div>
                    </div>
                    <div class="member-actions">
                        <button class="btn btn-outline">Contact</button>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
