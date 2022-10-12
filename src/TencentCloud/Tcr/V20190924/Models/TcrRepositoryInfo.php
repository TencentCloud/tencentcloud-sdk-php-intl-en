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
 * TCR image repository information
 *
 * @method string getName() Obtain Repository name
 * @method void setName(string $Name) Set Repository name
 * @method string getNamespace() Obtain Namespace name
 * @method void setNamespace(string $Namespace) Set Namespace name
 * @method string getCreationTime() Obtain Creation time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
 * @method void setCreationTime(string $CreationTime) Set Creation time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
 * @method boolean getPublic() Obtain Whether to make public
 * @method void setPublic(boolean $Public) Set Whether to make public
 * @method string getDescription() Obtain Detailed repository description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Detailed repository description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBriefDescription() Obtain Brief description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBriefDescription(string $BriefDescription) Set Brief description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
 * @method void setUpdateTime(string $UpdateTime) Set Update time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
 */
class TcrRepositoryInfo extends AbstractModel
{
    /**
     * @var string Repository name
     */
    public $Name;

    /**
     * @var string Namespace name
     */
    public $Namespace;

    /**
     * @var string Creation time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
     */
    public $CreationTime;

    /**
     * @var boolean Whether to make public
     */
    public $Public;

    /**
     * @var string Detailed repository description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Brief description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BriefDescription;

    /**
     * @var string Update time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
     */
    public $UpdateTime;

    /**
     * @param string $Name Repository name
     * @param string $Namespace Namespace name
     * @param string $CreationTime Creation time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
     * @param boolean $Public Whether to make public
     * @param string $Description Detailed repository description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BriefDescription Brief description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time, such as `2006-01-02 15:04:05.999999999 -0700 MST`
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BriefDescription",$param) and $param["BriefDescription"] !== null) {
            $this->BriefDescription = $param["BriefDescription"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
