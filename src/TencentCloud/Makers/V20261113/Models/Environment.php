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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment.
 *
 * @method string getSlug() Obtain <p>Environment identifier. It cannot be changed after creation.</p>
 * @method void setSlug(string $Slug) Set <p>Environment identifier. It cannot be changed after creation.</p>
 * @method string getName() Obtain <p>Environment name.</p>
 * @method void setName(string $Name) Set <p>Environment name.</p>
 * @method string getType() Obtain <p>Production,Preview,Custom</p>
 * @method void setType(string $Type) Set <p>Production,Preview,Custom</p>
 * @method array getBranches() Obtain <p>Associate a branch. Wildcards are supported.</p>
 * @method void setBranches(array $Branches) Set <p>Associate a branch. Wildcards are supported.</p>
 * @method boolean getAutoDeploy() Obtain <p>Whether to deploy automatically. Production is always true</p>
 * @method void setAutoDeploy(boolean $AutoDeploy) Set <p>Whether to deploy automatically. Production is always true</p>
 * @method array getCustomDomains() Obtain <p>Bound custom domain name</p>
 * @method void setCustomDomains(array $CustomDomains) Set <p>Bound custom domain name</p>
 * @method array getEnvVars() Obtain <p>Environment variable.</p>
 * @method void setEnvVars(array $EnvVars) Set <p>Environment variable.</p>
 * @method string getCreatedOn() Obtain <p>Creation time.</p>
 * @method void setCreatedOn(string $CreatedOn) Set <p>Creation time.</p>
 * @method string getModifiedOn() Obtain <p>Update time.</p>
 * @method void setModifiedOn(string $ModifiedOn) Set <p>Update time.</p>
 */
class Environment extends AbstractModel
{
    /**
     * @var string <p>Environment identifier. It cannot be changed after creation.</p>
     */
    public $Slug;

    /**
     * @var string <p>Environment name.</p>
     */
    public $Name;

    /**
     * @var string <p>Production,Preview,Custom</p>
     */
    public $Type;

    /**
     * @var array <p>Associate a branch. Wildcards are supported.</p>
     */
    public $Branches;

    /**
     * @var boolean <p>Whether to deploy automatically. Production is always true</p>
     */
    public $AutoDeploy;

    /**
     * @var array <p>Bound custom domain name</p>
     */
    public $CustomDomains;

    /**
     * @var array <p>Environment variable.</p>
     */
    public $EnvVars;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedOn;

    /**
     * @var string <p>Update time.</p>
     */
    public $ModifiedOn;

    /**
     * @param string $Slug <p>Environment identifier. It cannot be changed after creation.</p>
     * @param string $Name <p>Environment name.</p>
     * @param string $Type <p>Production,Preview,Custom</p>
     * @param array $Branches <p>Associate a branch. Wildcards are supported.</p>
     * @param boolean $AutoDeploy <p>Whether to deploy automatically. Production is always true</p>
     * @param array $CustomDomains <p>Bound custom domain name</p>
     * @param array $EnvVars <p>Environment variable.</p>
     * @param string $CreatedOn <p>Creation time.</p>
     * @param string $ModifiedOn <p>Update time.</p>
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
        if (array_key_exists("Slug",$param) and $param["Slug"] !== null) {
            $this->Slug = $param["Slug"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = $param["Branches"];
        }

        if (array_key_exists("AutoDeploy",$param) and $param["AutoDeploy"] !== null) {
            $this->AutoDeploy = $param["AutoDeploy"];
        }

        if (array_key_exists("CustomDomains",$param) and $param["CustomDomains"] !== null) {
            $this->CustomDomains = $param["CustomDomains"];
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvironmentEnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
