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
 * CreateEdrAlertExportJob request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then base64-encode it)PolicyAction - int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
 * @method void setFilters(array $Filters) Set <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then base64-encode it)PolicyAction - int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
 * @method integer getLimit() Obtain <p>Limit entries. Default: 10. Maximum: 100</p>
 * @method void setLimit(integer $Limit) Set <p>Limit entries. Default: 10. Maximum: 100</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method string getOrder() Obtain <p>Sorting method: [ASC: Ascending | DESC: Descending]</p>
 * @method void setOrder(string $Order) Set <p>Sorting method: [ASC: Ascending | DESC: Descending]</p>
 * @method string getBy() Obtain <p>Optional sorting column: [LatestDetectTime]</p>
 * @method void setBy(string $By) Set <p>Optional sorting column: [LatestDetectTime]</p>
 * @method string getJobName() Obtain <p>Custom task name, allowing duplicates. If empty, a default name alert_{appid}_{timestamp} will be automatically generated (for example, alert_1234567890_20260501114522). It supports only numbers, letters, underscores, hyphens, and Chinese, up to 100 characters (counted by character/rune, with each Chinese character counted as 1). If validation fails, InvalidParameter will be returned (copywriting: TextEdrExportJobNameInvalid).</p>
 * @method void setJobName(string $JobName) Set <p>Custom task name, allowing duplicates. If empty, a default name alert_{appid}_{timestamp} will be automatically generated (for example, alert_1234567890_20260501114522). It supports only numbers, letters, underscores, hyphens, and Chinese, up to 100 characters (counted by character/rune, with each Chinese character counted as 1). If validation fails, InvalidParameter will be returned (copywriting: TextEdrExportJobNameInvalid).</p>
 */
class CreateEdrAlertExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then base64-encode it)PolicyAction - int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
     */
    public $Filters;

    /**
     * @var integer <p>Limit entries. Default: 10. Maximum: 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting method: [ASC: Ascending | DESC: Descending]</p>
     */
    public $Order;

    /**
     * @var string <p>Optional sorting column: [LatestDetectTime]</p>
     */
    public $By;

    /**
     * @var string <p>Custom task name, allowing duplicates. If empty, a default name alert_{appid}_{timestamp} will be automatically generated (for example, alert_1234567890_20260501114522). It supports only numbers, letters, underscores, hyphens, and Chinese, up to 100 characters (counted by character/rune, with each Chinese character counted as 1). If validation fails, InvalidParameter will be returned (copywriting: TextEdrExportJobNameInvalid).</p>
     */
    public $JobName;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then base64-encode it)PolicyAction - int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
     * @param integer $Limit <p>Limit entries. Default: 10. Maximum: 100</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param string $Order <p>Sorting method: [ASC: Ascending | DESC: Descending]</p>
     * @param string $By <p>Optional sorting column: [LatestDetectTime]</p>
     * @param string $JobName <p>Custom task name, allowing duplicates. If empty, a default name alert_{appid}_{timestamp} will be automatically generated (for example, alert_1234567890_20260501114522). It supports only numbers, letters, underscores, hyphens, and Chinese, up to 100 characters (counted by character/rune, with each Chinese character counted as 1). If validation fails, InvalidParameter will be returned (copywriting: TextEdrExportJobNameInvalid).</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }
    }
}
