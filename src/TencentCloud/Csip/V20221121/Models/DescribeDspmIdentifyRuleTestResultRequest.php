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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmIdentifyRuleTestResult request structure.
 *
 * @method string getRuleType() Obtain <p>Rule type</p><p>Enumeration values:</p><ul><li>structured: Structured rule</li><li>unstructrued: Unstructured rule</li></ul>
 * @method void setRuleType(string $RuleType) Set <p>Rule type</p><p>Enumeration values:</p><ul><li>structured: Structured rule</li><li>unstructrued: Unstructured rule</li></ul>
 * @method string getRuleContent() Obtain <p>Rule content</p>
 * @method void setRuleContent(string $RuleContent) Set <p>Rule content</p>
 * @method integer getRuleId() Obtain <p>Data item id</p>
 * @method void setRuleId(integer $RuleId) Set <p>Data item id</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getStructuredTestContent() Obtain <p>Structured test content</p>
 * @method void setStructuredTestContent(array $StructuredTestContent) Set <p>Structured test content</p>
 * @method string getUnStructuredTestContent() Obtain <p>Unstructured test content</p>
 * @method void setUnStructuredTestContent(string $UnStructuredTestContent) Set <p>Unstructured test content</p>
 * @method string getOperationSource() Obtain <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 * @method void setOperationSource(string $OperationSource) Set <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 */
class DescribeDspmIdentifyRuleTestResultRequest extends AbstractModel
{
    /**
     * @var string <p>Rule type</p><p>Enumeration values:</p><ul><li>structured: Structured rule</li><li>unstructrued: Unstructured rule</li></ul>
     */
    public $RuleType;

    /**
     * @var string <p>Rule content</p>
     */
    public $RuleContent;

    /**
     * @var integer <p>Data item id</p>
     */
    public $RuleId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Structured test content</p>
     */
    public $StructuredTestContent;

    /**
     * @var string <p>Unstructured test content</p>
     */
    public $UnStructuredTestContent;

    /**
     * @var string <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
     */
    public $OperationSource;

    /**
     * @param string $RuleType <p>Rule type</p><p>Enumeration values:</p><ul><li>structured: Structured rule</li><li>unstructrued: Unstructured rule</li></ul>
     * @param string $RuleContent <p>Rule content</p>
     * @param integer $RuleId <p>Data item id</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $StructuredTestContent <p>Structured test content</p>
     * @param string $UnStructuredTestContent <p>Unstructured test content</p>
     * @param string $OperationSource <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("StructuredTestContent",$param) and $param["StructuredTestContent"] !== null) {
            $this->StructuredTestContent = [];
            foreach ($param["StructuredTestContent"] as $key => $value){
                $obj = new DspmIdentifyRuleStructuredTestItem();
                $obj->deserialize($value);
                array_push($this->StructuredTestContent, $obj);
            }
        }

        if (array_key_exists("UnStructuredTestContent",$param) and $param["UnStructuredTestContent"] !== null) {
            $this->UnStructuredTestContent = $param["UnStructuredTestContent"];
        }

        if (array_key_exists("OperationSource",$param) and $param["OperationSource"] !== null) {
            $this->OperationSource = $param["OperationSource"];
        }
    }
}
