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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reference groups under the same SkillRefType (including total count + list of reference details). total_count is always based on the unfiltered original total amount. reference_summary_list is affected by the secondary authorization switch.
 *
 * @method array getReferenceSummaryList() Obtain <p>Reference detail list under this type</p>
 * @method void setReferenceSummaryList(array $ReferenceSummaryList) Set <p>Reference detail list under this type</p>
 * @method integer getReferenceType() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SKILL_REF_UNKNOWN</td> <td>0</td> <td>Placeholder</td> </tr> <tr> <td>SKILL_REF_OPENCLAW</td> <td>1</td> <td>openclaw</td> </tr> <tr> <td>SKILL_REF_AGENT</td> <td>2</td> <td>agent</td> </tr> <tr> <td>SKILL_REF_CORP_ASSISTANT</td> <td>3</td> <td>Business assistant</td> </tr> </tbody> </table>
 * @method void setReferenceType(integer $ReferenceType) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SKILL_REF_UNKNOWN</td> <td>0</td> <td>Placeholder</td> </tr> <tr> <td>SKILL_REF_OPENCLAW</td> <td>1</td> <td>openclaw</td> </tr> <tr> <td>SKILL_REF_AGENT</td> <td>2</td> <td>agent</td> </tr> <tr> <td>SKILL_REF_CORP_ASSISTANT</td> <td>3</td> <td>Business assistant</td> </tr> </tbody> </table>
 * @method integer getTotalCount() Obtain <p>Total number of references of this type</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total number of references of this type</p>
 */
class SkillReferenceGroup extends AbstractModel
{
    /**
     * @var array <p>Reference detail list under this type</p>
     */
    public $ReferenceSummaryList;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SKILL_REF_UNKNOWN</td> <td>0</td> <td>Placeholder</td> </tr> <tr> <td>SKILL_REF_OPENCLAW</td> <td>1</td> <td>openclaw</td> </tr> <tr> <td>SKILL_REF_AGENT</td> <td>2</td> <td>agent</td> </tr> <tr> <td>SKILL_REF_CORP_ASSISTANT</td> <td>3</td> <td>Business assistant</td> </tr> </tbody> </table>
     */
    public $ReferenceType;

    /**
     * @var integer <p>Total number of references of this type</p>
     */
    public $TotalCount;

    /**
     * @param array $ReferenceSummaryList <p>Reference detail list under this type</p>
     * @param integer $ReferenceType <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>SKILL_REF_UNKNOWN</td> <td>0</td> <td>Placeholder</td> </tr> <tr> <td>SKILL_REF_OPENCLAW</td> <td>1</td> <td>openclaw</td> </tr> <tr> <td>SKILL_REF_AGENT</td> <td>2</td> <td>agent</td> </tr> <tr> <td>SKILL_REF_CORP_ASSISTANT</td> <td>3</td> <td>Business assistant</td> </tr> </tbody> </table>
     * @param integer $TotalCount <p>Total number of references of this type</p>
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
        if (array_key_exists("ReferenceSummaryList",$param) and $param["ReferenceSummaryList"] !== null) {
            $this->ReferenceSummaryList = [];
            foreach ($param["ReferenceSummaryList"] as $key => $value){
                $obj = new SkillReferenceSummary();
                $obj->deserialize($value);
                array_push($this->ReferenceSummaryList, $obj);
            }
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
