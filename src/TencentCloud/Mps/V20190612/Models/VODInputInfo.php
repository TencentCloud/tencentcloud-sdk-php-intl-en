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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media processing VOD object information.
 *
 * @method string getBucket() Obtain <p><em>Bucket ID</em> where the media processing object file resides</p>
 * @method void setBucket(string $Bucket) Set <p><em>Bucket ID</em> where the media processing object file resides</p>
 * @method string getRegion() Obtain <p>Region of the Bucket where the media processing object file resides</p>
 * @method void setRegion(string $Region) Set <p>Region of the Bucket where the media processing object file resides</p>
 * @method string getObject() Obtain <p>Input path of the media processing object file</p>
 * @method void setObject(string $Object) Set <p>Input path of the media processing object file</p>
 * @method integer getSubAppId() Obtain <p>VOD application ID.</p>
 * @method void setSubAppId(integer $SubAppId) Set <p>VOD application ID.</p>
 * @method integer getVodBasic() Obtain <p>Whether to use VOD Standard Edition.<br>Attention: If left empty, VOD Pro Edition is used.</p><p>Enumeration values: </p><ul><li>Use VOD Pro Edition</li><li>Use VOD Standard Edition, allowing tasks to be initiated with FileId</li></ul><p>Default value: 0</p>
 * @method void setVodBasic(integer $VodBasic) Set <p>Whether to use VOD Standard Edition.<br>Attention: If left empty, VOD Pro Edition is used.</p><p>Enumeration values: </p><ul><li>Use VOD Pro Edition</li><li>Use VOD Standard Edition, allowing tasks to be initiated with FileId</li></ul><p>Default value: 0</p>
 * @method string getFileId() Obtain <p>VOD Standard Edition FileId</p>
 * @method void setFileId(string $FileId) Set <p>VOD Standard Edition FileId</p>
 */
class VODInputInfo extends AbstractModel
{
    /**
     * @var string <p><em>Bucket ID</em> where the media processing object file resides</p>
     */
    public $Bucket;

    /**
     * @var string <p>Region of the Bucket where the media processing object file resides</p>
     */
    public $Region;

    /**
     * @var string <p>Input path of the media processing object file</p>
     */
    public $Object;

    /**
     * @var integer <p>VOD application ID.</p>
     */
    public $SubAppId;

    /**
     * @var integer <p>Whether to use VOD Standard Edition.<br>Attention: If left empty, VOD Pro Edition is used.</p><p>Enumeration values: </p><ul><li>Use VOD Pro Edition</li><li>Use VOD Standard Edition, allowing tasks to be initiated with FileId</li></ul><p>Default value: 0</p>
     */
    public $VodBasic;

    /**
     * @var string <p>VOD Standard Edition FileId</p>
     */
    public $FileId;

    /**
     * @param string $Bucket <p><em>Bucket ID</em> where the media processing object file resides</p>
     * @param string $Region <p>Region of the Bucket where the media processing object file resides</p>
     * @param string $Object <p>Input path of the media processing object file</p>
     * @param integer $SubAppId <p>VOD application ID.</p>
     * @param integer $VodBasic <p>Whether to use VOD Standard Edition.<br>Attention: If left empty, VOD Pro Edition is used.</p><p>Enumeration values: </p><ul><li>Use VOD Pro Edition</li><li>Use VOD Standard Edition, allowing tasks to be initiated with FileId</li></ul><p>Default value: 0</p>
     * @param string $FileId <p>VOD Standard Edition FileId</p>
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("VodBasic",$param) and $param["VodBasic"] !== null) {
            $this->VodBasic = $param["VodBasic"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
