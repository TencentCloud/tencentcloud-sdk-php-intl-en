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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subapplication information.
 *
 * @method integer getSubAppId() Obtain Subapplication ID.
 * @method void setSubAppId(integer $SubAppId) Set Subapplication ID.
 * @method string getSubAppIdName() Obtain The subapplication name.
 * @method void setSubAppIdName(string $SubAppIdName) Set The subapplication name.
 * @method string getDescription() Obtain Subapplication overview.
 * @method void setDescription(string $Description) Set Subapplication overview.
 * @method string getCreateTime() Obtain Subapplication creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Subapplication creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getStatus() Obtain Subapplication status. Valid values:
<li>On: enabled</li>
<li>Off: disabled</li>
<li>Destroying: terminating</li>
<li>Destroyed: terminated</li>
 * @method void setStatus(string $Status) Set Subapplication status. Valid values:
<li>On: enabled</li>
<li>Off: disabled</li>
<li>Destroying: terminating</li>
<li>Destroyed: terminated</li>
 * @method string getName() Obtain The subapplication name. This parameter is not recommended. Please use `SubAppIdName` instead.
 * @method void setName(string $Name) Set The subapplication name. This parameter is not recommended. Please use `SubAppIdName` instead.
 */
class SubAppIdInfo extends AbstractModel
{
    /**
     * @var integer Subapplication ID.
     */
    public $SubAppId;

    /**
     * @var string The subapplication name.
     */
    public $SubAppIdName;

    /**
     * @var string Subapplication overview.
     */
    public $Description;

    /**
     * @var string Subapplication creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Subapplication status. Valid values:
<li>On: enabled</li>
<li>Off: disabled</li>
<li>Destroying: terminating</li>
<li>Destroyed: terminated</li>
     */
    public $Status;

    /**
     * @var string The subapplication name. This parameter is not recommended. Please use `SubAppIdName` instead.
     */
    public $Name;

    /**
     * @param integer $SubAppId Subapplication ID.
     * @param string $SubAppIdName The subapplication name.
     * @param string $Description Subapplication overview.
     * @param string $CreateTime Subapplication creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $Status Subapplication status. Valid values:
<li>On: enabled</li>
<li>Off: disabled</li>
<li>Destroying: terminating</li>
<li>Destroyed: terminated</li>
     * @param string $Name The subapplication name. This parameter is not recommended. Please use `SubAppIdName` instead.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubAppIdName",$param) and $param["SubAppIdName"] !== null) {
            $this->SubAppIdName = $param["SubAppIdName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
