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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version information about the configuration group.
 *
 * @method string getVersionId() Obtain Version ID.
 * @method void setVersionId(string $VersionId) Set Version ID.
 * @method string getVersionNumber() Obtain Version No.
 * @method void setVersionNumber(string $VersionNumber) Set Version No.
 * @method string getGroupId() Obtain Configuraration group ID.
 * @method void setGroupId(string $GroupId) Set Configuraration group ID.
 * @method string getGroupType() Obtain Configuration group type. Valid values: 
<li>l7_acceleration: L7 acceleration configuration group. </li>
<li>edge_functions: Edge function configuration group. </li>
 * @method void setGroupType(string $GroupType) Set Configuration group type. Valid values: 
<li>l7_acceleration: L7 acceleration configuration group. </li>
<li>edge_functions: Edge function configuration group. </li>
 * @method string getDescription() Obtain Version description.
 * @method void setDescription(string $Description) Set Version description.
 * @method string getStatus() Obtain Version status. Valid values: 
<li>creating: Being created.</li>
<li>inactive: Not effective.</li>
<li>active: Effective. </li>
 * @method void setStatus(string $Status) Set Version status. Valid values: 
<li>creating: Being created.</li>
<li>inactive: Not effective.</li>
<li>active: Effective. </li>
 * @method string getCreateTime() Obtain Version creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 * @method void setCreateTime(string $CreateTime) Set Version creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 */
class ConfigGroupVersionInfo extends AbstractModel
{
    /**
     * @var string Version ID.
     */
    public $VersionId;

    /**
     * @var string Version No.
     */
    public $VersionNumber;

    /**
     * @var string Configuraration group ID.
     */
    public $GroupId;

    /**
     * @var string Configuration group type. Valid values: 
<li>l7_acceleration: L7 acceleration configuration group. </li>
<li>edge_functions: Edge function configuration group. </li>
     */
    public $GroupType;

    /**
     * @var string Version description.
     */
    public $Description;

    /**
     * @var string Version status. Valid values: 
<li>creating: Being created.</li>
<li>inactive: Not effective.</li>
<li>active: Effective. </li>
     */
    public $Status;

    /**
     * @var string Version creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
     */
    public $CreateTime;

    /**
     * @param string $VersionId Version ID.
     * @param string $VersionNumber Version No.
     * @param string $GroupId Configuraration group ID.
     * @param string $GroupType Configuration group type. Valid values: 
<li>l7_acceleration: L7 acceleration configuration group. </li>
<li>edge_functions: Edge function configuration group. </li>
     * @param string $Description Version description.
     * @param string $Status Version status. Valid values: 
<li>creating: Being created.</li>
<li>inactive: Not effective.</li>
<li>active: Effective. </li>
     * @param string $CreateTime Version creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
