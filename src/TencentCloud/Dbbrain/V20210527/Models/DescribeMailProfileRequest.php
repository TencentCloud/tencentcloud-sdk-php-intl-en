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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMailProfile request structure.
 *
 * @method string getProfileType() Obtain Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
 * @method void setProfileType(string $ProfileType) Set Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Number of results per page in paginated queries. Maximum value: `50`.
 * @method void setLimit(integer $Limit) Set Number of results per page in paginated queries. Maximum value: `50`.
 * @method string getProfileName() Obtain Query by email configuration name. The name of the scheduled task email configuration should be in the format of "scheduler_"+{instanceId}.
 * @method void setProfileName(string $ProfileName) Set Query by email configuration name. The name of the scheduled task email configuration should be in the format of "scheduler_"+{instanceId}.
 */
class DescribeMailProfileRequest extends AbstractModel
{
    /**
     * @var string Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
     */
    public $ProfileType;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     */
    public $Product;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Number of results per page in paginated queries. Maximum value: `50`.
     */
    public $Limit;

    /**
     * @var string Query by email configuration name. The name of the scheduled task email configuration should be in the format of "scheduler_"+{instanceId}.
     */
    public $ProfileName;

    /**
     * @param string $ProfileType Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Number of results per page in paginated queries. Maximum value: `50`.
     * @param string $ProfileName Query by email configuration name. The name of the scheduled task email configuration should be in the format of "scheduler_"+{instanceId}.
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
        if (array_key_exists("ProfileType",$param) and $param["ProfileType"] !== null) {
            $this->ProfileType = $param["ProfileType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }
    }
}
