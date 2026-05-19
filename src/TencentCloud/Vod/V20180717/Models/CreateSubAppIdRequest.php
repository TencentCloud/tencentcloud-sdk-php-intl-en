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
 * CreateSubAppId request structure.
 *
 * @method string getName() Obtain <p>Application name, length limited to 40 characters.</p>
 * @method void setName(string $Name) Set <p>Application name, length limited to 40 characters.</p>
 * @method string getDescription() Obtain <p>Application description, length limited to 300 characters. If left blank, the application description is empty by default.</p>
 * @method void setDescription(string $Description) Set <p>Application description, length limited to 300 characters. If left blank, the application description is empty by default.</p>
 * @method string getType() Obtain <p>App type. Valid values: <li>AllInOne: integrated;</li><li>Professional: pro edition.</li>Default value: AllInOne.</p>
 * @method void setType(string $Type) Set <p>App type. Valid values: <li>AllInOne: integrated;</li><li>Professional: pro edition.</li>Default value: AllInOne.</p>
 * @method string getMode() Obtain <p>Mode of this application. Available values are:</p><ul><li>fileid: fileid mode only</li><li>fileid+path: fileid & path mode<br>Leave empty to select fileid mode by default</li></ul>
 * @method void setMode(string $Mode) Set <p>Mode of this application. Available values are:</p><ul><li>fileid: fileid mode only</li><li>fileid+path: fileid & path mode<br>Leave empty to select fileid mode by default</li></ul>
 * @method string getStorageRegion() Obtain <p>When Mode is fileid only, it is used to set the default storage region and is selectable.<br>When Mode is fileid+path, it is used to specify the storage region and is required.</p><p>For reference: <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1">Supported region list</a></p>
 * @method void setStorageRegion(string $StorageRegion) Set <p>When Mode is fileid only, it is used to set the default storage region and is selectable.<br>When Mode is fileid+path, it is used to specify the storage region and is required.</p><p>For reference: <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1">Supported region list</a></p>
 * @method array getTags() Obtain <p>tag that needs to be bound to this application</p>
 * @method void setTags(array $Tags) Set <p>tag that needs to be bound to this application</p>
 */
class CreateSubAppIdRequest extends AbstractModel
{
    /**
     * @var string <p>Application name, length limited to 40 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Application description, length limited to 300 characters. If left blank, the application description is empty by default.</p>
     */
    public $Description;

    /**
     * @var string <p>App type. Valid values: <li>AllInOne: integrated;</li><li>Professional: pro edition.</li>Default value: AllInOne.</p>
     */
    public $Type;

    /**
     * @var string <p>Mode of this application. Available values are:</p><ul><li>fileid: fileid mode only</li><li>fileid+path: fileid & path mode<br>Leave empty to select fileid mode by default</li></ul>
     */
    public $Mode;

    /**
     * @var string <p>When Mode is fileid only, it is used to set the default storage region and is selectable.<br>When Mode is fileid+path, it is used to specify the storage region and is required.</p><p>For reference: <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1">Supported region list</a></p>
     */
    public $StorageRegion;

    /**
     * @var array <p>tag that needs to be bound to this application</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>Application name, length limited to 40 characters.</p>
     * @param string $Description <p>Application description, length limited to 300 characters. If left blank, the application description is empty by default.</p>
     * @param string $Type <p>App type. Valid values: <li>AllInOne: integrated;</li><li>Professional: pro edition.</li>Default value: AllInOne.</p>
     * @param string $Mode <p>Mode of this application. Available values are:</p><ul><li>fileid: fileid mode only</li><li>fileid+path: fileid & path mode<br>Leave empty to select fileid mode by default</li></ul>
     * @param string $StorageRegion <p>When Mode is fileid only, it is used to set the default storage region and is selectable.<br>When Mode is fileid+path, it is used to specify the storage region and is required.</p><p>For reference: <a href="https://www.tencentcloud.com/document/product/266/9760?from_cn_redirect=1">Supported region list</a></p>
     * @param array $Tags <p>tag that needs to be bound to this application</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
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
