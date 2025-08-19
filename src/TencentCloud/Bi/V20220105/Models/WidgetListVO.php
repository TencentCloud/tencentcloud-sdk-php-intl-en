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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Page component information
 *
 * @method string getCorpId() Obtain uin
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCorpId(string $CorpId) Set uin
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPageId() Obtain Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageId(string $PageId) Set Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWidgetList() Obtain Component array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidgetList(array $WidgetList) Set Component array.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WidgetListVO extends AbstractModel
{
    /**
     * @var string uin
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CorpId;

    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageId;

    /**
     * @var array Component array.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WidgetList;

    /**
     * @param string $CorpId uin
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PageId Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $WidgetList Component array.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("WidgetList",$param) and $param["WidgetList"] !== null) {
            $this->WidgetList = [];
            foreach ($param["WidgetList"] as $key => $value){
                $obj = new WidgetVO();
                $obj->deserialize($value);
                array_push($this->WidgetList, $obj);
            }
        }
    }
}
