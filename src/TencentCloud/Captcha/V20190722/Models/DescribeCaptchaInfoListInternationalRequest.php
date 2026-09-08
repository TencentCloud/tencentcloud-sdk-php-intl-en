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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaInfoListInternational request structure.
 *
 * @method integer getPageIndex() Obtain <p>Pagination parameter - page number</p>
 * @method void setPageIndex(integer $PageIndex) Set <p>Pagination parameter - page number</p>
 * @method integer getPageSize() Obtain <p>Pagination parameters - number of records per page</p>
 * @method void setPageSize(integer $PageSize) Set <p>Pagination parameters - number of records per page</p>
 * @method array getUserSetCapTypeArr() Obtain <p>Query parameter - Behavior verification type</p><p>Enumeration values:</p><ul><li>1: Invisible verification</li><li>2: Slide verification</li><li>8: Graphical verification</li><li>9: Voice verification</li></ul>
 * @method void setUserSetCapTypeArr(array $UserSetCapTypeArr) Set <p>Query parameter - Behavior verification type</p><p>Enumeration values:</p><ul><li>1: Invisible verification</li><li>2: Slide verification</li><li>8: Graphical verification</li><li>9: Voice verification</li></ul>
 * @method array getVerifyRankArr() Obtain <p>Query parameter - risk control level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul>
 * @method void setVerifyRankArr(array $VerifyRankArr) Set <p>Query parameter - risk control level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul>
 * @method array getChannelInfoArr() Obtain <p>Query parameter - client multiple selection</p><p>Enumeration values:</p><ul><li>web:</li><li>ios </li><li>android</li></ul>
 * @method void setChannelInfoArr(array $ChannelInfoArr) Set <p>Query parameter - client multiple selection</p><p>Enumeration values:</p><ul><li>web:</li><li>ios </li><li>android</li></ul>
 * @method string getCaptchaAppId() Obtain <p>Query parameter -Captcha appid</p>
 * @method void setCaptchaAppId(string $CaptchaAppId) Set <p>Query parameter -Captcha appid</p>
 * @method string getAppName() Obtain <p>Query parameter - Captcha name</p>
 * @method void setAppName(string $AppName) Set <p>Query parameter - Captcha name</p>
 * @method OrderByInternational getOrderBy() Obtain <p>Sorting parameter</p><p>Input limits: desc: in descending order by creation time; asc: in ascending order by creation time</p>
 * @method void setOrderBy(OrderByInternational $OrderBy) Set <p>Sorting parameter</p><p>Input limits: desc: in descending order by creation time; asc: in ascending order by creation time</p>
 */
class DescribeCaptchaInfoListInternationalRequest extends AbstractModel
{
    /**
     * @var integer <p>Pagination parameter - page number</p>
     */
    public $PageIndex;

    /**
     * @var integer <p>Pagination parameters - number of records per page</p>
     */
    public $PageSize;

    /**
     * @var array <p>Query parameter - Behavior verification type</p><p>Enumeration values:</p><ul><li>1: Invisible verification</li><li>2: Slide verification</li><li>8: Graphical verification</li><li>9: Voice verification</li></ul>
     */
    public $UserSetCapTypeArr;

    /**
     * @var array <p>Query parameter - risk control level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul>
     */
    public $VerifyRankArr;

    /**
     * @var array <p>Query parameter - client multiple selection</p><p>Enumeration values:</p><ul><li>web:</li><li>ios </li><li>android</li></ul>
     */
    public $ChannelInfoArr;

    /**
     * @var string <p>Query parameter -Captcha appid</p>
     */
    public $CaptchaAppId;

    /**
     * @var string <p>Query parameter - Captcha name</p>
     */
    public $AppName;

    /**
     * @var OrderByInternational <p>Sorting parameter</p><p>Input limits: desc: in descending order by creation time; asc: in ascending order by creation time</p>
     */
    public $OrderBy;

    /**
     * @param integer $PageIndex <p>Pagination parameter - page number</p>
     * @param integer $PageSize <p>Pagination parameters - number of records per page</p>
     * @param array $UserSetCapTypeArr <p>Query parameter - Behavior verification type</p><p>Enumeration values:</p><ul><li>1: Invisible verification</li><li>2: Slide verification</li><li>8: Graphical verification</li><li>9: Voice verification</li></ul>
     * @param array $VerifyRankArr <p>Query parameter - risk control level</p><p>Enumeration values:</p><ul><li>1: Experience-oriented</li><li>2: Balanced</li><li>3: Security-focused</li></ul>
     * @param array $ChannelInfoArr <p>Query parameter - client multiple selection</p><p>Enumeration values:</p><ul><li>web:</li><li>ios </li><li>android</li></ul>
     * @param string $CaptchaAppId <p>Query parameter -Captcha appid</p>
     * @param string $AppName <p>Query parameter - Captcha name</p>
     * @param OrderByInternational $OrderBy <p>Sorting parameter</p><p>Input limits: desc: in descending order by creation time; asc: in ascending order by creation time</p>
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
        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("UserSetCapTypeArr",$param) and $param["UserSetCapTypeArr"] !== null) {
            $this->UserSetCapTypeArr = $param["UserSetCapTypeArr"];
        }

        if (array_key_exists("VerifyRankArr",$param) and $param["VerifyRankArr"] !== null) {
            $this->VerifyRankArr = $param["VerifyRankArr"];
        }

        if (array_key_exists("ChannelInfoArr",$param) and $param["ChannelInfoArr"] !== null) {
            $this->ChannelInfoArr = $param["ChannelInfoArr"];
        }

        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderByInternational();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }
    }
}
