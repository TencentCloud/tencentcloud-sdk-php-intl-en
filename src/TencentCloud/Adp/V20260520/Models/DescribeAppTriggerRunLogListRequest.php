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
 * DescribeAppTriggerRunLogList request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method array getFilterList() Obtain <p>Filter parameters.</p>
 * @method void setFilterList(array $FilterList) Set <p>Filter parameters.</p>
 * @method integer getPageNumber() Obtain <p>Page number</p><p>Value range: [1, 1000000]</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number</p><p>Value range: [1, 1000000]</p>
 * @method integer getPageSize() Obtain <p>Number of records per page</p><p>Value range: [1, 100]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of records per page</p><p>Value range: [1, 100]</p>
 * @method integer getScope() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method void setScope(integer $Scope) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method string getTriggerId() Obtain <p>Application trigger ID</p>
 * @method void setTriggerId(string $TriggerId) Set <p>Application trigger ID</p>
 * @method string getUserId() Obtain <p>Visitor ID</p>
 * @method void setUserId(string $UserId) Set <p>Visitor ID</p>
 */
class DescribeAppTriggerRunLogListRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var array <p>Filter parameters.</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Page number</p><p>Value range: [1, 1000000]</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of records per page</p><p>Value range: [1, 100]</p>
     */
    public $PageSize;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     */
    public $Scope;

    /**
     * @var string <p>Application trigger ID</p>
     */
    public $TriggerId;

    /**
     * @var string <p>Visitor ID</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param array $FilterList <p>Filter parameters.</p>
     * @param integer $PageNumber <p>Page number</p><p>Value range: [1, 1000000]</p>
     * @param integer $PageSize <p>Number of records per page</p><p>Value range: [1, 100]</p>
     * @param integer $Scope <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     * @param string $TriggerId <p>Application trigger ID</p>
     * @param string $UserId <p>Visitor ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
