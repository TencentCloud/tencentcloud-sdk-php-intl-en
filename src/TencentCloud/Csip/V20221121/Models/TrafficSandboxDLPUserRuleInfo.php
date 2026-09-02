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
 * Structured view of DLP user rules, returned by 5 detection dimensions of the detection rule, making it easy for the frontend to render by dimension. Read-only output fields, does not affect Create/Modify input parameters.
 *
 * @method array getFileName() Obtain File name match dimension: summarized and deduplicated file name/regular list
 * @method void setFileName(array $FileName) Set File name match dimension: summarized and deduplicated file name/regular list
 * @method TrafficSandboxDLPFileSizeRange getFileSize() Obtain File size limit dimension (interval)
 * @method void setFileSize(TrafficSandboxDLPFileSizeRange $FileSize) Set File size limit dimension (interval)
 * @method array getFileType() Obtain File format limited dimensions: format/category list after aggregation and deduplication
 * @method void setFileType(array $FileType) Set File format limited dimensions: format/category list after aggregation and deduplication
 * @method TrafficSandboxDLPURLRuleItem getURLRule() Obtain Outbound domain name detection dimension (single Value Object)
 * @method void setURLRule(TrafficSandboxDLPURLRuleItem $URLRule) Set Outbound domain name detection dimension (single Value Object)
 * @method array getTrafficRule() Obtain Outbound content detection dimension (multi-line, name + regular)
 * @method void setTrafficRule(array $TrafficRule) Set Outbound content detection dimension (multi-line, name + regular)
 */
class TrafficSandboxDLPUserRuleInfo extends AbstractModel
{
    /**
     * @var array File name match dimension: summarized and deduplicated file name/regular list
     */
    public $FileName;

    /**
     * @var TrafficSandboxDLPFileSizeRange File size limit dimension (interval)
     */
    public $FileSize;

    /**
     * @var array File format limited dimensions: format/category list after aggregation and deduplication
     */
    public $FileType;

    /**
     * @var TrafficSandboxDLPURLRuleItem Outbound domain name detection dimension (single Value Object)
     */
    public $URLRule;

    /**
     * @var array Outbound content detection dimension (multi-line, name + regular)
     */
    public $TrafficRule;

    /**
     * @param array $FileName File name match dimension: summarized and deduplicated file name/regular list
     * @param TrafficSandboxDLPFileSizeRange $FileSize File size limit dimension (interval)
     * @param array $FileType File format limited dimensions: format/category list after aggregation and deduplication
     * @param TrafficSandboxDLPURLRuleItem $URLRule Outbound domain name detection dimension (single Value Object)
     * @param array $TrafficRule Outbound content detection dimension (multi-line, name + regular)
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = new TrafficSandboxDLPFileSizeRange();
            $this->FileSize->deserialize($param["FileSize"]);
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("URLRule",$param) and $param["URLRule"] !== null) {
            $this->URLRule = new TrafficSandboxDLPURLRuleItem();
            $this->URLRule->deserialize($param["URLRule"]);
        }

        if (array_key_exists("TrafficRule",$param) and $param["TrafficRule"] !== null) {
            $this->TrafficRule = [];
            foreach ($param["TrafficRule"] as $key => $value){
                $obj = new TrafficSandboxDLPTrafficRuleItem();
                $obj->deserialize($value);
                array_push($this->TrafficRule, $obj);
            }
        }
    }
}
