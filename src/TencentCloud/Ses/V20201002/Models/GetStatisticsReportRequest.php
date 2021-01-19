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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetStatisticsReport request structure.
 *
 * @method string getStartDate() Obtain Start date.
 * @method void setStartDate(string $StartDate) Set Start date.
 * @method string getEndDate() Obtain End date.
 * @method void setEndDate(string $EndDate) Set End date.
 * @method string getDomain() Obtain Sender domain.
 * @method void setDomain(string $Domain) Set Sender domain.
 * @method string getReceivingMailboxType() Obtain Recipient address type, for example, gmail.com.
 * @method void setReceivingMailboxType(string $ReceivingMailboxType) Set Recipient address type, for example, gmail.com.
 */
class GetStatisticsReportRequest extends AbstractModel
{
    /**
     * @var string Start date.
     */
    public $StartDate;

    /**
     * @var string End date.
     */
    public $EndDate;

    /**
     * @var string Sender domain.
     */
    public $Domain;

    /**
     * @var string Recipient address type, for example, gmail.com.
     */
    public $ReceivingMailboxType;

    /**
     * @param string $StartDate Start date.
     * @param string $EndDate End date.
     * @param string $Domain Sender domain.
     * @param string $ReceivingMailboxType Recipient address type, for example, gmail.com.
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ReceivingMailboxType",$param) and $param["ReceivingMailboxType"] !== null) {
            $this->ReceivingMailboxType = $param["ReceivingMailboxType"];
        }
    }
}
