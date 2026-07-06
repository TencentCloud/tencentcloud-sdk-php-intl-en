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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pagination result parameters
 *
 * @method integer getTotalCount() Obtain Total data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPage() Obtain Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPage(integer $TotalPage) Set Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrentPageNo() Obtain Current page number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentPageNo(integer $CurrentPageNo) Set Current page number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsEnd() Obtain [Deprecated] Whether it has reached the end.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsEnd(boolean $IsEnd) Set [Deprecated] Whether it has reached the end.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnd() Obtain Whether it has traversed to the end.
 * @method void setEnd(boolean $End) Set Whether it has traversed to the end.
 */
class PageByNoResult extends AbstractModel
{
    /**
     * @var integer Total data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPage;

    /**
     * @var integer Current page number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentPageNo;

    /**
     * @var boolean [Deprecated] Whether it has reached the end.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $IsEnd;

    /**
     * @var boolean Whether it has traversed to the end.
     */
    public $End;

    /**
     * @param integer $TotalCount Total data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPage Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CurrentPageNo Current page number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsEnd [Deprecated] Whether it has reached the end.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $End Whether it has traversed to the end.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("CurrentPageNo",$param) and $param["CurrentPageNo"] !== null) {
            $this->CurrentPageNo = $param["CurrentPageNo"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
