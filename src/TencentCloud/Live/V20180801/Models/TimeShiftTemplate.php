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
 * The information of a time shifting template.
 *
 * @method string getTemplateName() Obtain The template name.
 * @method void setTemplateName(string $TemplateName) Set The template name.
 * @method integer getDuration() Obtain The time shifting duration.
Unit: second
 * @method void setDuration(integer $Duration) Set The time shifting duration.
Unit: second
 * @method integer getItemDuration() Obtain The segment size.
Value range: 3-10.
Unit: Second.
Default value: 5
 * @method void setItemDuration(integer $ItemDuration) Set The segment size.
Value range: 3-10.
Unit: Second.
Default value: 5
 * @method integer getTemplateId() Obtain The template ID.
 * @method void setTemplateId(integer $TemplateId) Set The template ID.
 * @method string getDescription() Obtain The template description.
 * @method void setDescription(string $Description) Set The template description.
 * @method string getArea() Obtain The region. Valid values:
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
 * @method void setArea(string $Area) Set The region. Valid values:
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
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
 */
class TimeShiftTemplate extends AbstractModel
{
    /**
     * @var string The template name.
     */
    public $TemplateName;

    /**
     * @var integer The time shifting duration.
Unit: second
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
     * @var integer The template ID.
     */
    public $TemplateId;

    /**
     * @var string The template description.
     */
    public $Description;

    /**
     * @var string The region. Valid values:
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
     */
    public $Area;

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
     * @param string $TemplateName The template name.
     * @param integer $Duration The time shifting duration.
Unit: second
     * @param integer $ItemDuration The segment size.
Value range: 3-10.
Unit: Second.
Default value: 5
     * @param integer $TemplateId The template ID.
     * @param string $Description The template description.
     * @param string $Area The region. Valid values:
`Mainland`: The Chinese mainland.
`Overseas`: Outside the Chinese mainland.
Default value: `Mainland`.
     * @param boolean $RemoveWatermark Whether to remove watermarks.
If you pass in `true`, the original stream will be recorded.
Default value: `false`.
     * @param array $TranscodeTemplateIds The transcoding template IDs.
This API works only if `RemoveWatermark` is `false`.
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ItemDuration",$param) and $param["ItemDuration"] !== null) {
            $this->ItemDuration = $param["ItemDuration"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("RemoveWatermark",$param) and $param["RemoveWatermark"] !== null) {
            $this->RemoveWatermark = $param["RemoveWatermark"];
        }

        if (array_key_exists("TranscodeTemplateIds",$param) and $param["TranscodeTemplateIds"] !== null) {
            $this->TranscodeTemplateIds = $param["TranscodeTemplateIds"];
        }
    }
}
