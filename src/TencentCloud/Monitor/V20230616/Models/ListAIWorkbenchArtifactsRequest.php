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
 * ListAIWorkbenchArtifacts request structure.
 *
 * @method integer getPerPage() Obtain <p>Number of items per page</p>
 * @method void setPerPage(integer $PerPage) Set <p>Number of items per page</p>
 * @method integer getPageNo() Obtain <p>Page number.</p>
 * @method void setPageNo(integer $PageNo) Set <p>Page number.</p>
 * @method array getSessionIds() Obtain <p>Session ID.</p>
 * @method void setSessionIds(array $SessionIds) Set <p>Session ID.</p>
 * @method array getMimeTypes() Obtain <p>Message content type</p>
 * @method void setMimeTypes(array $MimeTypes) Set <p>Message content type</p>
 * @method string getOrderDirection() Obtain <p>Sorting order</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
 * @method void setOrderDirection(string $OrderDirection) Set <p>Sorting order</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
 */
class ListAIWorkbenchArtifactsRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of items per page</p>
     */
    public $PerPage;

    /**
     * @var integer <p>Page number.</p>
     */
    public $PageNo;

    /**
     * @var array <p>Session ID.</p>
     */
    public $SessionIds;

    /**
     * @var array <p>Message content type</p>
     */
    public $MimeTypes;

    /**
     * @var string <p>Sorting order</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
     */
    public $OrderDirection;

    /**
     * @param integer $PerPage <p>Number of items per page</p>
     * @param integer $PageNo <p>Page number.</p>
     * @param array $SessionIds <p>Session ID.</p>
     * @param array $MimeTypes <p>Message content type</p>
     * @param string $OrderDirection <p>Sorting order</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
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
        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("SessionIds",$param) and $param["SessionIds"] !== null) {
            $this->SessionIds = $param["SessionIds"];
        }

        if (array_key_exists("MimeTypes",$param) and $param["MimeTypes"] !== null) {
            $this->MimeTypes = $param["MimeTypes"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
