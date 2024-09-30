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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media quality inspection template details.
 *
 * @method integer getDefinition() Obtain Unique identifier of a media quality inspection template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of a media quality inspection template.
 * @method string getName() Obtain Media quality inspection template name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Media quality inspection template name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComment() Obtain Template description.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Template description.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getQualityControlItemSet() Obtain Media quality inspection configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityControlItemSet(array $QualityControlItemSet) Set Media quality inspection configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
 */
class QualityControlTemplate extends AbstractModel
{
    /**
     * @var integer Unique identifier of a media quality inspection template.
     */
    public $Definition;

    /**
     * @var string Media quality inspection template name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Template description.


Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var array Media quality inspection configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityControlItemSet;

    /**
     * @var string Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique identifier of a media quality inspection template.
     * @param string $Name Media quality inspection template name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Comment Template description.


Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: custom template.</li>

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $QualityControlItemSet Media quality inspection configuration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("QualityControlItemSet",$param) and $param["QualityControlItemSet"] !== null) {
            $this->QualityControlItemSet = [];
            foreach ($param["QualityControlItemSet"] as $key => $value){
                $obj = new QualityControlItemConfig();
                $obj->deserialize($value);
                array_push($this->QualityControlItemSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
