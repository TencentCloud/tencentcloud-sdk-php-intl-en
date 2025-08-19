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
 * ExportScreenPage request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getPageId() Obtain Page ID.
 * @method void setPageId(string $PageId) Set Page ID.
 * @method string getCanvasType() Obtain Canvas type. Grid canvas: GRID; Free canvas: FREE.
 * @method void setCanvasType(string $CanvasType) Set Canvas type. Grid canvas: GRID; Free canvas: FREE.
 * @method string getPicType() Obtain Image export type. Valid values: Base64, and URL (valid period: 1 day).
 * @method void setPicType(string $PicType) Set Image export type. Valid values: Base64, and URL (valid period: 1 day).
 * @method array getWidgetIds() Obtain Component IDs. When empty, export the entire page.
 * @method void setWidgetIds(array $WidgetIds) Set Component IDs. When empty, export the entire page.
 * @method boolean getAsyncRequest() Obtain Whether it is an async request.
 * @method void setAsyncRequest(boolean $AsyncRequest) Set Whether it is an async request.
 * @method string getTranId() Obtain Transaction ID.
 * @method void setTranId(string $TranId) Set Transaction ID.
 */
class ExportScreenPageRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Page ID.
     */
    public $PageId;

    /**
     * @var string Canvas type. Grid canvas: GRID; Free canvas: FREE.
     */
    public $CanvasType;

    /**
     * @var string Image export type. Valid values: Base64, and URL (valid period: 1 day).
     */
    public $PicType;

    /**
     * @var array Component IDs. When empty, export the entire page.
     */
    public $WidgetIds;

    /**
     * @var boolean Whether it is an async request.
     */
    public $AsyncRequest;

    /**
     * @var string Transaction ID.
     */
    public $TranId;

    /**
     * @param string $ProjectId Project ID.
     * @param string $PageId Page ID.
     * @param string $CanvasType Canvas type. Grid canvas: GRID; Free canvas: FREE.
     * @param string $PicType Image export type. Valid values: Base64, and URL (valid period: 1 day).
     * @param array $WidgetIds Component IDs. When empty, export the entire page.
     * @param boolean $AsyncRequest Whether it is an async request.
     * @param string $TranId Transaction ID.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("CanvasType",$param) and $param["CanvasType"] !== null) {
            $this->CanvasType = $param["CanvasType"];
        }

        if (array_key_exists("PicType",$param) and $param["PicType"] !== null) {
            $this->PicType = $param["PicType"];
        }

        if (array_key_exists("WidgetIds",$param) and $param["WidgetIds"] !== null) {
            $this->WidgetIds = $param["WidgetIds"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }
    }
}
