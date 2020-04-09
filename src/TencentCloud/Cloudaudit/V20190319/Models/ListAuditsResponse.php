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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return parameter structure of ListAudits
 *
 * @method array getAuditSummarys() Obtain Queries the summary set of tracking sets
 * @method void setAuditSummarys(array $AuditSummarys) Set Queries the summary set of tracking sets
 * @method string getRequestId() Obtain Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
 * @method void setRequestId(string $RequestId) Set Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
 */
class ListAuditsResponse extends AbstractModel
{
    /**
     * @var array Queries the summary set of tracking sets
     */
    public $AuditSummarys;

    /**
     * @var string Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
     */
    public $RequestId;

    /**
     * @param array $AuditSummarys Queries the summary set of tracking sets
     * @param string $RequestId Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
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
        if (array_key_exists("AuditSummarys",$param) and $param["AuditSummarys"] !== null) {
            $this->AuditSummarys = [];
            foreach ($param["AuditSummarys"] as $key => $value){
                $obj = new AuditSummary();
                $obj->deserialize($value);
                array_push($this->AuditSummarys, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
