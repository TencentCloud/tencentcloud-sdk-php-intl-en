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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Browse event details
 *
 * @method string getPageType() Obtain <p>Current page type such as home page, search page</p>
 * @method void setPageType(string $PageType) Set <p>Current page type such as home page, search page</p>
 * @method string getPageUrl() Obtain <p>Currently page URL</p>
 * @method void setPageUrl(string $PageUrl) Set <p>Currently page URL</p>
 * @method integer getDuration() Obtain <p>Browsing duration</p><p>Measurement unit: ms</p>
 * @method void setDuration(integer $Duration) Set <p>Browsing duration</p><p>Measurement unit: ms</p>
 * @method string getContentType() Obtain <p>The type of the content in current page such as ad, video, article</p>
 * @method void setContentType(string $ContentType) Set <p>The type of the content in current page such as ad, video, article</p>
 * @method string getContentId() Obtain <p>The ID of the content in current page</p>
 * @method void setContentId(string $ContentId) Set <p>The ID of the content in current page</p>
 * @method string getReferPageType() Obtain <p>Previous page type such as home page, search page</p>
 * @method void setReferPageType(string $ReferPageType) Set <p>Previous page type such as home page, search page</p>
 * @method string getReferPageUrl() Obtain <p>Previous page URL</p>
 * @method void setReferPageUrl(string $ReferPageUrl) Set <p>Previous page URL</p>
 * @method string getGuestId() Obtain <p>The ID of the user as guest</p>
 * @method void setGuestId(string $GuestId) Set <p>The ID of the user as guest</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class BrowseEvent extends AbstractModel
{
    /**
     * @var string <p>Current page type such as home page, search page</p>
     */
    public $PageType;

    /**
     * @var string <p>Currently page URL</p>
     */
    public $PageUrl;

    /**
     * @var integer <p>Browsing duration</p><p>Measurement unit: ms</p>
     */
    public $Duration;

    /**
     * @var string <p>The type of the content in current page such as ad, video, article</p>
     */
    public $ContentType;

    /**
     * @var string <p>The ID of the content in current page</p>
     */
    public $ContentId;

    /**
     * @var string <p>Previous page type such as home page, search page</p>
     */
    public $ReferPageType;

    /**
     * @var string <p>Previous page URL</p>
     */
    public $ReferPageUrl;

    /**
     * @var string <p>The ID of the user as guest</p>
     */
    public $GuestId;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param string $PageType <p>Current page type such as home page, search page</p>
     * @param string $PageUrl <p>Currently page URL</p>
     * @param integer $Duration <p>Browsing duration</p><p>Measurement unit: ms</p>
     * @param string $ContentType <p>The type of the content in current page such as ad, video, article</p>
     * @param string $ContentId <p>The ID of the content in current page</p>
     * @param string $ReferPageType <p>Previous page type such as home page, search page</p>
     * @param string $ReferPageUrl <p>Previous page URL</p>
     * @param string $GuestId <p>The ID of the user as guest</p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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
        if (array_key_exists("PageType",$param) and $param["PageType"] !== null) {
            $this->PageType = $param["PageType"];
        }

        if (array_key_exists("PageUrl",$param) and $param["PageUrl"] !== null) {
            $this->PageUrl = $param["PageUrl"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("ReferPageType",$param) and $param["ReferPageType"] !== null) {
            $this->ReferPageType = $param["ReferPageType"];
        }

        if (array_key_exists("ReferPageUrl",$param) and $param["ReferPageUrl"] !== null) {
            $this->ReferPageUrl = $param["ReferPageUrl"];
        }

        if (array_key_exists("GuestId",$param) and $param["GuestId"] !== null) {
            $this->GuestId = $param["GuestId"];
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
