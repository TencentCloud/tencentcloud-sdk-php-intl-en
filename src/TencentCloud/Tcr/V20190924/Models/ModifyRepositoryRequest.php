<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRepository request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method string getRepositoryName() Obtain Image repository name
 * @method void setRepositoryName(string $RepositoryName) Set Image repository name
 * @method string getBriefDescription() Obtain Brief repository description
 * @method void setBriefDescription(string $BriefDescription) Set Brief repository description
 * @method string getDescription() Obtain Detailed repository description
 * @method void setDescription(string $Description) Set Detailed repository description
 */
class ModifyRepositoryRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var string Image repository name
     */
    public $RepositoryName;

    /**
     * @var string Brief repository description
     */
    public $BriefDescription;

    /**
     * @var string Detailed repository description
     */
    public $Description;

    /**
     * @param string $RegistryId Instance ID
     * @param string $NamespaceName Namespace name
     * @param string $RepositoryName Image repository name
     * @param string $BriefDescription Brief repository description
     * @param string $Description Detailed repository description
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("BriefDescription",$param) and $param["BriefDescription"] !== null) {
            $this->BriefDescription = $param["BriefDescription"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
