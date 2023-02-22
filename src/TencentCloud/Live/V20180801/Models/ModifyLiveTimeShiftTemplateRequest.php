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
 * ModifyLiveTimeShiftTemplate request structure.
 *
 * @method integer getTemplateId() Obtain The time shifting template ID.
 * @method void setTemplateId(integer $TemplateId) Set The time shifting template ID.
 * @method string getTemplateName() Obtain The template name.
Only letters, numbers, underscores, and hyphens are supported.
 * @method void setTemplateName(string $TemplateName) Set The template name.
Only letters, numbers, underscores, and hyphens are supported.
 * @method string getDescription() Obtain The template description.
Maximum length: 1,024 bytes.
Only letters, numbers, underscores, and hyphens are supported.
 * @method void setDescription(string $Description) Set The template description.
Maximum length: 1,024 bytes.
Only letters, numbers, underscores, and hyphens are supported.
 * @method integer getDuration() Obtain The time shifting duration.
Unit: Second.
 * @method void setDuration(integer $Duration) Set The time shifting duration.
Unit: Second.
 * @method integer getItemDuration() Obtain The segment size.
Value range: 3-10.
Unit: Second.
Default value: 5
 * @method void setItemDuration(integer $ItemDuration) Set The segment size.
Value range: 3-10.
Unit: Second.
Default value: 5
 * @method boolean getRemoveWatermark() Obtain Whether to remove watermarks.
If you pass in `true`, the original stream will be recorded.
Default value: `false`.
 * @method void setRemoveWatermark(boolean $RemoveWatermark) Set Whether to remove watermarks.
If you pass in `true`, the original stream will be recorded.
Default value: `false`.
 * @method array getTranscodeTemplateIds() Obtain The transcoding template IDs.
This API works only if `RemoveWatermark` is `false`.
 * @method void setTranscodeTemplateIds(array $TranscodeTemplateIds) Set The transcoding template IDs.
This API works only if `RemoveWatermark` is `false`.
 * @method string getArea() Obtain The region.
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
 * @method void setArea(string $Area) Set The region.
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
 */
class ModifyLiveTimeShiftTemplateRequest extends AbstractModel
{
    /**
     * @var integer The time shifting template ID.
     */
    public $TemplateId;

    /**
     * @var string The template name.
Only letters, numbers, underscores, and hyphens are supported.
     */
    public $TemplateName;

    /**
     * @var string The template description.
Maximum length: 1,024 bytes.
Only letters, numbers, underscores, and hyphens are supported.
     */
    public $Description;

    /**
     * @var integer The time shifting duration.
Unit: Second.
     */
    public $Duration;

    /**
     * @var integer The segment size.
Value range: 3-10.
Unit: Second.
Default value: 5
     */
    public $ItemDuration;

    /**
     * @var boolean Whether to remove watermarks.
If you pass in `true`, the original stream will be recorded.
Default value: `false`.
     */
    public $RemoveWatermark;

    /**
     * @var array The transcoding template IDs.
This API works only if `RemoveWatermark` is `false`.
     */
    public $TranscodeTemplateIds;

    /**
     * @var string The region.
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
     */
    public $Area;

    /**
     * @param integer $TemplateId The time shifting template ID.
     * @param string $TemplateName The template name.
Only letters, numbers, underscores, and hyphens are supported.
     * @param string $Description The template description.
Maximum length: 1,024 bytes.
Only letters, numbers, underscores, and hyphens are supported.
     * @param integer $Duration The time shifting duration.
Unit: Second.
     * @param integer $ItemDuration The segment size.
Value range: 3-10.
Unit: Second.
Default value: 5
     * @param boolean $RemoveWatermark Whether to remove watermarks.
If you pass in `true`, the original stream will be recorded.
Default value: `false`.
     * @param array $TranscodeTemplateIds The transcoding template IDs.
This API works only if `RemoveWatermark` is `false`.
     * @param string $Area The region.
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ItemDuration",$param) and $param["ItemDuration"] !== null) {
            $this->ItemDuration = $param["ItemDuration"];
        }

        if (array_key_exists("RemoveWatermark",$param) and $param["RemoveWatermark"] !== null) {
            $this->RemoveWatermark = $param["RemoveWatermark"];
        }

        if (array_key_exists("TranscodeTemplateIds",$param) and $param["TranscodeTemplateIds"] !== null) {
            $this->TranscodeTemplateIds = $param["TranscodeTemplateIds"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
