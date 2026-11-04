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
 * Tag abstract
 *
 * @method string getLabelId() Obtain <p>Tag ID.</p>
 * @method void setLabelId(string $LabelId) Set <p>Tag ID.</p>
 * @method MetaValue getMetaValue() Obtain <p>Metadata configuration (configuration message when the tag is set to metadata)</p>
 * @method void setMetaValue(MetaValue $MetaValue) Set <p>Metadata configuration (configuration message when the tag is set to metadata)</p>
 * @method string getName() Obtain <p>Tag name.</p>
 * @method void setName(string $Name) Set <p>Tag name.</p>
 * @method integer getRefCount() Obtain <p>Number of resources referring to the tag</p>
 * @method void setRefCount(integer $RefCount) Set <p>Number of resources referring to the tag</p>
 * @method array getTermList() Obtain <p>Tag value (standard word + synonym list)</p>
 * @method void setTermList(array $TermList) Set <p>Tag value (standard word + synonym list)</p>
 * @method integer getTermTotalCount() Obtain <p>Total number of tag values.</p>
 * @method void setTermTotalCount(integer $TermTotalCount) Set <p>Total number of tag values.</p>
 */
class LabelSummary extends AbstractModel
{
    /**
     * @var string <p>Tag ID.</p>
     */
    public $LabelId;

    /**
     * @var MetaValue <p>Metadata configuration (configuration message when the tag is set to metadata)</p>
     */
    public $MetaValue;

    /**
     * @var string <p>Tag name.</p>
     */
    public $Name;

    /**
     * @var integer <p>Number of resources referring to the tag</p>
     */
    public $RefCount;

    /**
     * @var array <p>Tag value (standard word + synonym list)</p>
     */
    public $TermList;

    /**
     * @var integer <p>Total number of tag values.</p>
     */
    public $TermTotalCount;

    /**
     * @param string $LabelId <p>Tag ID.</p>
     * @param MetaValue $MetaValue <p>Metadata configuration (configuration message when the tag is set to metadata)</p>
     * @param string $Name <p>Tag name.</p>
     * @param integer $RefCount <p>Number of resources referring to the tag</p>
     * @param array $TermList <p>Tag value (standard word + synonym list)</p>
     * @param integer $TermTotalCount <p>Total number of tag values.</p>
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

        if (array_key_exists("MetaValue",$param) and $param["MetaValue"] !== null) {
            $this->MetaValue = new MetaValue();
            $this->MetaValue->deserialize($param["MetaValue"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RefCount",$param) and $param["RefCount"] !== null) {
            $this->RefCount = $param["RefCount"];
        }

        if (array_key_exists("TermList",$param) and $param["TermList"] !== null) {
            $this->TermList = [];
            foreach ($param["TermList"] as $key => $value){
                $obj = new LabelTerm();
                $obj->deserialize($value);
                array_push($this->TermList, $obj);
            }
        }

        if (array_key_exists("TermTotalCount",$param) and $param["TermTotalCount"] !== null) {
            $this->TermTotalCount = $param["TermTotalCount"];
        }
    }
}
