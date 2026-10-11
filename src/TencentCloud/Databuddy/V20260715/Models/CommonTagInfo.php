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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common tag information (for query display scenarios), suitable for lightweight display of various asset tags such as table tags and field tags, for use in API responses such as GetTable.
 *
 * @method string getLabelId() Obtain Tag ID
 * @method void setLabelId(string $LabelId) Set Tag ID
 * @method string getLabelName() Obtain Tag name.
 * @method void setLabelName(string $LabelName) Set Tag name.
 * @method string getLabelValueId() Obtain Tag value ID. For property tags (LabelType=3), it can be 0.
 * @method void setLabelValueId(string $LabelValueId) Set Tag value ID. For property tags (LabelType=3), it can be 0.
 * @method string getLabelValue() Obtain Tag value. It can be empty for a masking tag (LabelType=4).
 * @method void setLabelValue(string $LabelValue) Set Tag value. It can be empty for a masking tag (LabelType=4).
 * @method integer getType() Obtain Tag type. For valid values, see the LabelType enum definition: 1 - governance tag, 2 - custom tag, 3 - property tag, 4 - masking tag.
 * @method void setType(integer $Type) Set Tag type. For valid values, see the LabelType enum definition: 1 - governance tag, 2 - custom tag, 3 - property tag, 4 - masking tag.
 * @method boolean getDeleted() Obtain Whether the tag has been deleted. true indicates that no record of this LabelId is found in meta_biz_label and the tag has been physically deleted; false (default) indicates that the tag still exists.
 * @method void setDeleted(boolean $Deleted) Set Whether the tag has been deleted. true indicates that no record of this LabelId is found in meta_biz_label and the tag has been physically deleted; false (default) indicates that the tag still exists.
 */
class CommonTagInfo extends AbstractModel
{
    /**
     * @var string Tag ID
     */
    public $LabelId;

    /**
     * @var string Tag name.
     */
    public $LabelName;

    /**
     * @var string Tag value ID. For property tags (LabelType=3), it can be 0.
     */
    public $LabelValueId;

    /**
     * @var string Tag value. It can be empty for a masking tag (LabelType=4).
     */
    public $LabelValue;

    /**
     * @var integer Tag type. For valid values, see the LabelType enum definition: 1 - governance tag, 2 - custom tag, 3 - property tag, 4 - masking tag.
     */
    public $Type;

    /**
     * @var boolean Whether the tag has been deleted. true indicates that no record of this LabelId is found in meta_biz_label and the tag has been physically deleted; false (default) indicates that the tag still exists.
     */
    public $Deleted;

    /**
     * @param string $LabelId Tag ID
     * @param string $LabelName Tag name.
     * @param string $LabelValueId Tag value ID. For property tags (LabelType=3), it can be 0.
     * @param string $LabelValue Tag value. It can be empty for a masking tag (LabelType=4).
     * @param integer $Type Tag type. For valid values, see the LabelType enum definition: 1 - governance tag, 2 - custom tag, 3 - property tag, 4 - masking tag.
     * @param boolean $Deleted Whether the tag has been deleted. true indicates that no record of this LabelId is found in meta_biz_label and the tag has been physically deleted; false (default) indicates that the tag still exists.
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelValueId",$param) and $param["LabelValueId"] !== null) {
            $this->LabelValueId = $param["LabelValueId"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}
