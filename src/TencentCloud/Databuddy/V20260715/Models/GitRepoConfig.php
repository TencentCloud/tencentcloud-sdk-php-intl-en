<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * git configuration.
 *
 * @method SparseCheckoutConfig getSparseCheckout() Obtain <p>Checkout rules</p>
 * @method void setSparseCheckout(SparseCheckoutConfig $SparseCheckout) Set <p>Checkout rules</p>
 * @method string getRepoUrl() Obtain <p>Git repository URL</p>
 * @method void setRepoUrl(string $RepoUrl) Set <p>Git repository URL</p>
 * @method string getBranch() Obtain <p>Branch name.</p>
 * @method void setBranch(string $Branch) Set <p>Branch name.</p>
 * @method string getAuthConfigName() Obtain <p>Associated gitAuth configuration name</p>
 * @method void setAuthConfigName(string $AuthConfigName) Set <p>Associated gitAuth configuration name</p>
 */
class GitRepoConfig extends AbstractModel
{
    /**
     * @var SparseCheckoutConfig <p>Checkout rules</p>
     */
    public $SparseCheckout;

    /**
     * @var string <p>Git repository URL</p>
     */
    public $RepoUrl;

    /**
     * @var string <p>Branch name.</p>
     */
    public $Branch;

    /**
     * @var string <p>Associated gitAuth configuration name</p>
     */
    public $AuthConfigName;

    /**
     * @param SparseCheckoutConfig $SparseCheckout <p>Checkout rules</p>
     * @param string $RepoUrl <p>Git repository URL</p>
     * @param string $Branch <p>Branch name.</p>
     * @param string $AuthConfigName <p>Associated gitAuth configuration name</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SparseCheckout",$param) and $param["SparseCheckout"] !== null) {
            $this->SparseCheckout = new SparseCheckoutConfig();
            $this->SparseCheckout->deserialize($param["SparseCheckout"]);
        }

        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("AuthConfigName",$param) and $param["AuthConfigName"] !== null) {
            $this->AuthConfigName = $param["AuthConfigName"];
        }
    }
}
