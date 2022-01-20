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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveSnapshotTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name.
Maximum length: 255 bytes.
Only letters, digits, underscores, and hyphens can be contained.
 * @method void setTemplateName(string $TemplateName) Set Template name.
Maximum length: 255 bytes.
Only letters, digits, underscores, and hyphens can be contained.
 * @method integer getCosAppId() Obtain COS application ID.
 * @method void setCosAppId(integer $CosAppId) Set COS application ID.
 * @method string getCosBucket() Obtain COS bucket name.
Note: the value of `CosBucket` cannot contain `-[appid]`.
 * @method void setCosBucket(string $CosBucket) Set COS bucket name.
Note: the value of `CosBucket` cannot contain `-[appid]`.
 * @method string getCosRegion() Obtain COS region.
 * @method void setCosRegion(string $CosRegion) Set COS region.
 * @method string getDescription() Obtain Description.
Maximum length: 1,024 bytes.
Only letters, digits, underscores, and hyphens can be contained.
 * @method void setDescription(string $Description) Set Description.
Maximum length: 1,024 bytes.
Only letters, digits, underscores, and hyphens can be contained.
 * @method integer getSnapshotInterval() Obtain Screencapturing interval (s). Default value: 10
Value range: 2-300
 * @method void setSnapshotInterval(integer $SnapshotInterval) Set Screencapturing interval (s). Default value: 10
Value range: 2-300
 * @method integer getWidth() Obtain Screenshot width. Default value: `0` (original width)
Value range: 0-3000
 * @method void setWidth(integer $Width) Set Screenshot width. Default value: `0` (original width)
Value range: 0-3000
 * @method integer getHeight() Obtain Screenshot height. Default value: `0` (original height)
Value range: 0-2000
 * @method void setHeight(integer $Height) Set Screenshot height. Default value: `0` (original height)
Value range: 0-2000
 * @method integer getPornFlag() Obtain Whether to enable porn detection. 0: no, 1: yes. Default value: 0
 * @method void setPornFlag(integer $PornFlag) Set Whether to enable porn detection. 0: no, 1: yes. Default value: 0
 * @method string getCosPrefix() Obtain COS Bucket folder prefix.
If no value is entered, the default value
`/{Year}-{Month}-{Day}`
will be used.
 * @method void setCosPrefix(string $CosPrefix) Set COS Bucket folder prefix.
If no value is entered, the default value
`/{Year}-{Month}-{Day}`
will be used.
 * @method string getCosFileName() Obtain COS filename.
If no value is entered, the default value 
`{StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}`
will be used.
 * @method void setCosFileName(string $CosFileName) Set COS filename.
If no value is entered, the default value 
`{StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}`
will be used.
 */
class CreateLiveSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name.
Maximum length: 255 bytes.
Only letters, digits, underscores, and hyphens can be contained.
     */
    public $TemplateName;

    /**
     * @var integer COS application ID.
     */
    public $CosAppId;

    /**
     * @var string COS bucket name.
Note: the value of `CosBucket` cannot contain `-[appid]`.
     */
    public $CosBucket;

    /**
     * @var string COS region.
     */
    public $CosRegion;

    /**
     * @var string Description.
Maximum length: 1,024 bytes.
Only letters, digits, underscores, and hyphens can be contained.
     */
    public $Description;

    /**
     * @var integer Screencapturing interval (s). Default value: 10
Value range: 2-300
     */
    public $SnapshotInterval;

    /**
     * @var integer Screenshot width. Default value: `0` (original width)
Value range: 0-3000
     */
    public $Width;

    /**
     * @var integer Screenshot height. Default value: `0` (original height)
Value range: 0-2000
     */
    public $Height;

    /**
     * @var integer Whether to enable porn detection. 0: no, 1: yes. Default value: 0
     */
    public $PornFlag;

    /**
     * @var string COS Bucket folder prefix.
If no value is entered, the default value
`/{Year}-{Month}-{Day}`
will be used.
     */
    public $CosPrefix;

    /**
     * @var string COS filename.
If no value is entered, the default value 
`{StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}`
will be used.
     */
    public $CosFileName;

    /**
     * @param string $TemplateName Template name.
Maximum length: 255 bytes.
Only letters, digits, underscores, and hyphens can be contained.
     * @param integer $CosAppId COS application ID.
     * @param string $CosBucket COS bucket name.
Note: the value of `CosBucket` cannot contain `-[appid]`.
     * @param string $CosRegion COS region.
     * @param string $Description Description.
Maximum length: 1,024 bytes.
Only letters, digits, underscores, and hyphens can be contained.
     * @param integer $SnapshotInterval Screencapturing interval (s). Default value: 10
Value range: 2-300
     * @param integer $Width Screenshot width. Default value: `0` (original width)
Value range: 0-3000
     * @param integer $Height Screenshot height. Default value: `0` (original height)
Value range: 0-2000
     * @param integer $PornFlag Whether to enable porn detection. 0: no, 1: yes. Default value: 0
     * @param string $CosPrefix COS Bucket folder prefix.
If no value is entered, the default value
`/{Year}-{Month}-{Day}`
will be used.
     * @param string $CosFileName COS filename.
If no value is entered, the default value 
`{StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}`
will be used.
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("CosAppId",$param) and $param["CosAppId"] !== null) {
            $this->CosAppId = $param["CosAppId"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SnapshotInterval",$param) and $param["SnapshotInterval"] !== null) {
            $this->SnapshotInterval = $param["SnapshotInterval"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("PornFlag",$param) and $param["PornFlag"] !== null) {
            $this->PornFlag = $param["PornFlag"];
        }

        if (array_key_exists("CosPrefix",$param) and $param["CosPrefix"] !== null) {
            $this->CosPrefix = $param["CosPrefix"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }
    }
}
