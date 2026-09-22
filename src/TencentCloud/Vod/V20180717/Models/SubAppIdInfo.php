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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sub-application information.
 *
 * @method integer getSubAppId() Obtain Subapplication ID.
 * @method void setSubAppId(integer $SubAppId) Set Subapplication ID.
 * @method string getSubAppIdName() Obtain Subapplication name.
 * @method void setSubAppIdName(string $SubAppIdName) Set Subapplication name.
 * @method string getDescription() Obtain Sub-application description.
 * @method void setDescription(string $Description) Set Sub-application description.
 * @method string getCreateTime() Obtain Subapplication creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Subapplication creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getStatus() Obtain Subapplication status. Valid values:
<li>On: enabled;</li>
<li>Off: disabled</li>
<li>Destroying: Being destroyed.</li>
<li>Destroyed: completion of destruction.</li>
 * @method void setStatus(string $Status) Set Subapplication status. Valid values:
<li>On: enabled;</li>
<li>Off: disabled</li>
<li>Destroying: Being destroyed.</li>
<li>Destroyed: completion of destruction.</li>
 * @method string getName() Obtain Subapplication name (this field is not recommended; use the new subapplication name field SubAppIdName instead).
 * @method void setName(string $Name) Set Subapplication name (this field is not recommended; use the new subapplication name field SubAppIdName instead).
 * @method string getMode() Obtain Application mode. Valid values:
- fileid: FileID mode only
- - fileid+path: FileID & Path mode
Leave empty to select FileID-only mode by default.
 * @method void setMode(string $Mode) Set Application mode. Valid values:
- fileid: FileID mode only
- - fileid+path: FileID & Path mode
Leave empty to select FileID-only mode by default.
 * @method array getStorageRegions() Obtain Storage region where the sub-application is enabled.
 * @method void setStorageRegions(array $StorageRegions) Set Storage region where the sub-application is enabled.
 * @method array getTags() Obtain tag bound to the sub-application.
 * @method void setTags(array $Tags) Set tag bound to the sub-application.
 */
class SubAppIdInfo extends AbstractModel
{
    /**
     * @var integer Subapplication ID.
     */
    public $SubAppId;

    /**
     * @var string Subapplication name.
     */
    public $SubAppIdName;

    /**
     * @var string Sub-application description.
     */
    public $Description;

    /**
     * @var string Subapplication creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Subapplication status. Valid values:
<li>On: enabled;</li>
<li>Off: disabled</li>
<li>Destroying: Being destroyed.</li>
<li>Destroyed: completion of destruction.</li>
     */
    public $Status;

    /**
     * @var string Subapplication name (this field is not recommended; use the new subapplication name field SubAppIdName instead).
     */
    public $Name;

    /**
     * @var string Application mode. Valid values:
- fileid: FileID mode only
- - fileid+path: FileID & Path mode
Leave empty to select FileID-only mode by default.
     */
    public $Mode;

    /**
     * @var array Storage region where the sub-application is enabled.
     */
    public $StorageRegions;

    /**
     * @var array tag bound to the sub-application.
     */
    public $Tags;

    /**
     * @param integer $SubAppId Subapplication ID.
     * @param string $SubAppIdName Subapplication name.
     * @param string $Description Sub-application description.
     * @param string $CreateTime Subapplication creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $Status Subapplication status. Valid values:
<li>On: enabled;</li>
<li>Off: disabled</li>
<li>Destroying: Being destroyed.</li>
<li>Destroyed: completion of destruction.</li>
     * @param string $Name Subapplication name (this field is not recommended; use the new subapplication name field SubAppIdName instead).
     * @param string $Mode Application mode. Valid values:
- fileid: FileID mode only
- - fileid+path: FileID & Path mode
Leave empty to select FileID-only mode by default.
     * @param array $StorageRegions Storage region where the sub-application is enabled.
     * @param array $Tags tag bound to the sub-application.
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StorageRegions",$param) and $param["StorageRegions"] !== null) {
            $this->StorageRegions = $param["StorageRegions"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
