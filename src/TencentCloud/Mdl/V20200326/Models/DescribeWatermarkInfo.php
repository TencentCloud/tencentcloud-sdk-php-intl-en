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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark information
 *
 * @method string getId() Obtain Watermark ID
 * @method void setId(string $Id) Set Watermark ID
 * @method string getName() Obtain Watermark name
 * @method void setName(string $Name) Set Watermark name
 * @method string getType() Obtain Watermark type. Valid values: STATIC_IMAGE, TEXT.
 * @method void setType(string $Type) Set Watermark type. Valid values: STATIC_IMAGE, TEXT.
 * @method DescribeImageSettings getImageSettings() Obtain Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setImageSettings(DescribeImageSettings $ImageSettings) Set Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method DescribeTextSettings getTextSettings() Obtain Watermark text settings. This parameter is valid if `Type` is `TEXT`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTextSettings(DescribeTextSettings $TextSettings) Set Watermark text settings. This parameter is valid if `Type` is `TEXT`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUpdateTime() Obtain Last modified time (UTC+0) of the watermark, in the format of `2020-01-01T12:00:00Z`
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time (UTC+0) of the watermark, in the format of `2020-01-01T12:00:00Z`
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getAttachedChannels() Obtain List of channel IDs the watermark is bound to
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAttachedChannels(array $AttachedChannels) Set List of channel IDs the watermark is bound to
Note: This field may return `null`, indicating that no valid value was found.
 */
class DescribeWatermarkInfo extends AbstractModel
{
    /**
     * @var string Watermark ID
     */
    public $Id;

    /**
     * @var string Watermark name
     */
    public $Name;

    /**
     * @var string Watermark type. Valid values: STATIC_IMAGE, TEXT.
     */
    public $Type;

    /**
     * @var DescribeImageSettings Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ImageSettings;

    /**
     * @var DescribeTextSettings Watermark text settings. This parameter is valid if `Type` is `TEXT`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TextSettings;

    /**
     * @var string Last modified time (UTC+0) of the watermark, in the format of `2020-01-01T12:00:00Z`
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UpdateTime;

    /**
     * @var array List of channel IDs the watermark is bound to
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AttachedChannels;

    /**
     * @param string $Id Watermark ID
     * @param string $Name Watermark name
     * @param string $Type Watermark type. Valid values: STATIC_IMAGE, TEXT.
     * @param DescribeImageSettings $ImageSettings Watermark image settings. This parameter is valid if `Type` is `STATIC_IMAGE`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param DescribeTextSettings $TextSettings Watermark text settings. This parameter is valid if `Type` is `TEXT`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UpdateTime Last modified time (UTC+0) of the watermark, in the format of `2020-01-01T12:00:00Z`
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $AttachedChannels List of channel IDs the watermark is bound to
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ImageSettings",$param) and $param["ImageSettings"] !== null) {
            $this->ImageSettings = new DescribeImageSettings();
            $this->ImageSettings->deserialize($param["ImageSettings"]);
        }

        if (array_key_exists("TextSettings",$param) and $param["TextSettings"] !== null) {
            $this->TextSettings = new DescribeTextSettings();
            $this->TextSettings->deserialize($param["TextSettings"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AttachedChannels",$param) and $param["AttachedChannels"] !== null) {
            $this->AttachedChannels = $param["AttachedChannels"];
        }
    }
}
