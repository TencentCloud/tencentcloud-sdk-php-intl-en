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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtraRiskResult
 *
 * @method string getStatus() Obtain <p>Completion of the additional checks in this request, indicating whether the result can be trusted.</p><p>Valid values:</p><ul><li>Completed: Conclusions (matched or passed) have been given for all checks required by this request.</li><li>Partial: At least one check cannot reach a conclusion due to unavailable dependencies, insufficient data, or incomplete or invalid input parameters. The result is for reference only and does not indicate security.</li></ul>
 * @method void setStatus(string $Status) Set <p>Completion of the additional checks in this request, indicating whether the result can be trusted.</p><p>Valid values:</p><ul><li>Completed: Conclusions (matched or passed) have been given for all checks required by this request.</li><li>Partial: At least one check cannot reach a conclusion due to unavailable dependencies, insufficient data, or incomplete or invalid input parameters. The result is for reference only and does not indicate security.</li></ul>
 * @method string getRiskLevel() Obtain <p>Additional risk level, which may be an empty string.</p><p>Valid values:</p><ul><li>High: An effective risk match exists (RiskDetailList is not empty in this case).</li><li>Low: The check is completed and no match is confirmed.</li><li>&quot;&quot; (empty string): Unrecognized. No check in this request can reach a conclusion, or not all checks are completed. It indicates neither risk nor security.</li></ul>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Additional risk level, which may be an empty string.</p><p>Valid values:</p><ul><li>High: An effective risk match exists (RiskDetailList is not empty in this case).</li><li>Low: The check is completed and no match is confirmed.</li><li>&quot;&quot; (empty string): Unrecognized. No check in this request can reach a conclusion, or not all checks are completed. It indicates neither risk nor security.</li></ul>
 * @method array getBlackListResult() Obtain <p>List of matched risk items. An empty array [] is returned if no risk item is matched.</p>
 * @method void setBlackListResult(array $BlackListResult) Set <p>List of matched risk items. An empty array [] is returned if no risk item is matched.</p>
 * @method array getRiskDetailList() Obtain <p>Face blocklist match details. An empty array [] is returned if no match is found.</p>
 * @method void setRiskDetailList(array $RiskDetailList) Set <p>Face blocklist match details. An empty array [] is returned if no match is found.</p>
 */
class ExtraRiskResult extends AbstractModel
{
    /**
     * @var string <p>Completion of the additional checks in this request, indicating whether the result can be trusted.</p><p>Valid values:</p><ul><li>Completed: Conclusions (matched or passed) have been given for all checks required by this request.</li><li>Partial: At least one check cannot reach a conclusion due to unavailable dependencies, insufficient data, or incomplete or invalid input parameters. The result is for reference only and does not indicate security.</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Additional risk level, which may be an empty string.</p><p>Valid values:</p><ul><li>High: An effective risk match exists (RiskDetailList is not empty in this case).</li><li>Low: The check is completed and no match is confirmed.</li><li>&quot;&quot; (empty string): Unrecognized. No check in this request can reach a conclusion, or not all checks are completed. It indicates neither risk nor security.</li></ul>
     */
    public $RiskLevel;

    /**
     * @var array <p>List of matched risk items. An empty array [] is returned if no risk item is matched.</p>
     */
    public $BlackListResult;

    /**
     * @var array <p>Face blocklist match details. An empty array [] is returned if no match is found.</p>
     */
    public $RiskDetailList;

    /**
     * @param string $Status <p>Completion of the additional checks in this request, indicating whether the result can be trusted.</p><p>Valid values:</p><ul><li>Completed: Conclusions (matched or passed) have been given for all checks required by this request.</li><li>Partial: At least one check cannot reach a conclusion due to unavailable dependencies, insufficient data, or incomplete or invalid input parameters. The result is for reference only and does not indicate security.</li></ul>
     * @param string $RiskLevel <p>Additional risk level, which may be an empty string.</p><p>Valid values:</p><ul><li>High: An effective risk match exists (RiskDetailList is not empty in this case).</li><li>Low: The check is completed and no match is confirmed.</li><li>&quot;&quot; (empty string): Unrecognized. No check in this request can reach a conclusion, or not all checks are completed. It indicates neither risk nor security.</li></ul>
     * @param array $BlackListResult <p>List of matched risk items. An empty array [] is returned if no risk item is matched.</p>
     * @param array $RiskDetailList <p>Face blocklist match details. An empty array [] is returned if no match is found.</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("BlackListResult",$param) and $param["BlackListResult"] !== null) {
            $this->BlackListResult = [];
            foreach ($param["BlackListResult"] as $key => $value){
                $obj = new BlackListItem();
                $obj->deserialize($value);
                array_push($this->BlackListResult, $obj);
            }
        }

        if (array_key_exists("RiskDetailList",$param) and $param["RiskDetailList"] !== null) {
            $this->RiskDetailList = [];
            foreach ($param["RiskDetailList"] as $key => $value){
                $obj = new RiskDetailItem();
                $obj->deserialize($value);
                array_push($this->RiskDetailList, $obj);
            }
        }
    }
}
