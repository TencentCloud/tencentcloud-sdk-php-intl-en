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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeManagers request structure.
 *
 * @method integer getCompanyId() Obtain Company ID, obtain through the API DescribeCompanies
 * @method void setCompanyId(integer $CompanyId) Set Company ID, obtain through the API DescribeCompanies
 * @method integer getOffset() Obtain Pagination offset. If not provided, default value is 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. If not provided, default value is 0.
 * @method integer getLimit() Obtain Pagination quantity per page. If not provided, the default value is 10. Maximum value is 1000.
 * @method void setLimit(integer $Limit) Set Pagination quantity per page. If not provided, the default value is 10. Maximum value is 1000.
 * @method string getManagerName() Obtain Manager name (deprecated). Please use SearchKey.
 * @method void setManagerName(string $ManagerName) Set Manager name (deprecated). Please use SearchKey.
 * @method string getManagerMail() Obtain Fuzzy query manager mailbox (deprecated), please use SearchKey
 * @method void setManagerMail(string $ManagerMail) Set Fuzzy query manager mailbox (deprecated), please use SearchKey
 * @method string getStatus() Obtain Filter based on manager status. Valid values:
'none' pending review
'audit', reviewing by AsiaInfo
'CAaudit' CA under review
'ok' reviewed
'review failed' for 'invalid'
expiring soon
expired
 * @method void setStatus(string $Status) Set Filter based on manager status. Valid values:
'none' pending review
'audit', reviewing by AsiaInfo
'CAaudit' CA under review
'ok' reviewed
'review failed' for 'invalid'
expiring soon
expired
 * @method string getSearchKey() Obtain Based on the format: manager surname|manager name|mailbox|department, perform accurate matching
 * @method void setSearchKey(string $SearchKey) Set Based on the format: manager surname|manager name|mailbox|department, perform accurate matching
 */
class DescribeManagersRequest extends AbstractModel
{
    /**
     * @var integer Company ID, obtain through the API DescribeCompanies
     */
    public $CompanyId;

    /**
     * @var integer Pagination offset. If not provided, default value is 0.
     */
    public $Offset;

    /**
     * @var integer Pagination quantity per page. If not provided, the default value is 10. Maximum value is 1000.
     */
    public $Limit;

    /**
     * @var string Manager name (deprecated). Please use SearchKey.
     */
    public $ManagerName;

    /**
     * @var string Fuzzy query manager mailbox (deprecated), please use SearchKey
     */
    public $ManagerMail;

    /**
     * @var string Filter based on manager status. Valid values:
'none' pending review
'audit', reviewing by AsiaInfo
'CAaudit' CA under review
'ok' reviewed
'review failed' for 'invalid'
expiring soon
expired
     */
    public $Status;

    /**
     * @var string Based on the format: manager surname|manager name|mailbox|department, perform accurate matching
     */
    public $SearchKey;

    /**
     * @param integer $CompanyId Company ID, obtain through the API DescribeCompanies
     * @param integer $Offset Pagination offset. If not provided, default value is 0.
     * @param integer $Limit Pagination quantity per page. If not provided, the default value is 10. Maximum value is 1000.
     * @param string $ManagerName Manager name (deprecated). Please use SearchKey.
     * @param string $ManagerMail Fuzzy query manager mailbox (deprecated), please use SearchKey
     * @param string $Status Filter based on manager status. Valid values:
'none' pending review
'audit', reviewing by AsiaInfo
'CAaudit' CA under review
'ok' reviewed
'review failed' for 'invalid'
expiring soon
expired
     * @param string $SearchKey Based on the format: manager surname|manager name|mailbox|department, perform accurate matching
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ManagerName",$param) and $param["ManagerName"] !== null) {
            $this->ManagerName = $param["ManagerName"];
        }

        if (array_key_exists("ManagerMail",$param) and $param["ManagerMail"] !== null) {
            $this->ManagerMail = $param["ManagerMail"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
