<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return <<<'HTML'
        <!DOCTYPE html>
        <html>
        <head>
            <title>ThinkPHP Demo</title>
            <style>
                body {
                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
                    line-height: 1.6;
                    margin: 0;
                    padding: 0;
                    background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
                    min-height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .container {
                    max-width: 800px;
                    margin: 20px;
                    padding: 40px;
                    background: white;
                    border-radius: 16px;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                    text-align: center;
                    animation: fadeIn 0.5s ease-out;
                }
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
                h1 {
                    color: #2d3748;
                    margin-bottom: 30px;
                    font-size: 2.5em;
                    font-weight: 700;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Hello ThinkPHP!3330</h1>
            </div>
        </body>
        </html>
        HTML;
    }
}