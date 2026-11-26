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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration message of the interception page
 *
 * @method integer getPageId() Obtain Unique Id of the interception page. The system includes a built-in interception page by default, with Id 0.
The Id can be obtained by uploading via the blocking page creation interface. If 0 is passed in, the system default blocking page is used. This parameter is deprecated.
 * @method void setPageId(integer $PageId) Set Unique Id of the interception page. The system includes a built-in interception page by default, with Id 0.
The Id can be obtained by uploading via the blocking page creation interface. If 0 is passed in, the system default blocking page is used. This parameter is deprecated.
 * @method integer getStatusCode() Obtain HTTP status code of the interception page. Value range: 100–600. 3xx status codes are not supported. Default for managed rule interception page: 566. Default for security protection (excluding managed rules) interception page: 567.
 * @method void setStatusCode(integer $StatusCode) Set HTTP status code of the interception page. Value range: 100–600. 3xx status codes are not supported. Default for managed rule interception page: 566. Default for security protection (excluding managed rules) interception page: 567.
 * @method string getName() Obtain Page file name or url.
 * @method void setName(string $Name) Set Page file name or url.
 * @method string getType() Obtain Page type, with values:
<li>page: Specified page.</li>

 * @method void setType(string $Type) Set Page type, with values:
<li>page: Specified page.</li>

 * @method string getCustomResponseId() Obtain Id. You can obtain this Id through the API for querying the custom error page list. The default value is `default`, which uses the system default page. This field is required and cannot be empty when Type is `page`.
 * @method void setCustomResponseId(string $CustomResponseId) Set Id. You can obtain this Id through the API for querying the custom error page list. The default value is `default`, which uses the system default page. This field is required and cannot be empty when Type is `page`.
 */
class DropPageDetail extends AbstractModel
{
    /**
     * @var integer Unique Id of the interception page. The system includes a built-in interception page by default, with Id 0.
The Id can be obtained by uploading via the blocking page creation interface. If 0 is passed in, the system default blocking page is used. This parameter is deprecated.
     */
    public $PageId;

    /**
     * @var integer HTTP status code of the interception page. Value range: 100–600. 3xx status codes are not supported. Default for managed rule interception page: 566. Default for security protection (excluding managed rules) interception page: 567.
     */
    public $StatusCode;

    /**
     * @var string Page file name or url.
     */
    public $Name;

    /**
     * @var string Page type, with values:
<li>page: Specified page.</li>

     */
    public $Type;

    /**
     * @var string Id. You can obtain this Id through the API for querying the custom error page list. The default value is `default`, which uses the system default page. This field is required and cannot be empty when Type is `page`.
     */
    public $CustomResponseId;

    /**
     * @param integer $PageId Unique Id of the interception page. The system includes a built-in interception page by default, with Id 0.
The Id can be obtained by uploading via the blocking page creation interface. If 0 is passed in, the system default blocking page is used. This parameter is deprecated.
     * @param integer $StatusCode HTTP status code of the interception page. Value range: 100–600. 3xx status codes are not supported. Default for managed rule interception page: 566. Default for security protection (excluding managed rules) interception page: 567.
     * @param string $Name Page file name or url.
     * @param string $Type Page type, with values:
<li>page: Specified page.</li>

     * @param string $CustomResponseId Id. You can obtain this Id through the API for querying the custom error page list. The default value is `default`, which uses the system default page. This field is required and cannot be empty when Type is `page`.
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
        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CustomResponseId",$param) and $param["CustomResponseId"] !== null) {
            $this->CustomResponseId = $param["CustomResponseId"];
        }
    }
}
