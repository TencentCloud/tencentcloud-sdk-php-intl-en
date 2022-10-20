<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The site test result
 *
 * @method integer getFirstContentfulPaint() Obtain Last contentful paint, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstContentfulPaint(integer $FirstContentfulPaint) Set Last contentful paint, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFirstMeaningfulPaint() Obtain Full content load, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstMeaningfulPaint(integer $FirstMeaningfulPaint) Set Full content load, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getOverallDownloadSpeed() Obtain Average download speed, in KB/s.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOverallDownloadSpeed(float $OverallDownloadSpeed) Set Average download speed, in KB/s.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenderTime() Obtain Rendering time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenderTime(integer $RenderTime) Set Rendering time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDocumentFinishTime() Obtain DOM content loaded, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocumentFinishTime(integer $DocumentFinishTime) Set DOM content loaded, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTcpConnectionTime() Obtain Average TCP connection, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTcpConnectionTime(integer $TcpConnectionTime) Set Average TCP connection, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResponseTime() Obtain Average backend response, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResponseTime(integer $ResponseTime) Set Average backend response, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileDownloadTime() Obtain Average DOM content download, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileDownloadTime(integer $FileDownloadTime) Set Average DOM content download, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLoadTime() Obtain Load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadTime(integer $LoadTime) Set Load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SpeedTestingStatistics extends AbstractModel
{
    /**
     * @var integer Last contentful paint, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstContentfulPaint;

    /**
     * @var integer Full content load, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstMeaningfulPaint;

    /**
     * @var float Average download speed, in KB/s.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OverallDownloadSpeed;

    /**
     * @var integer Rendering time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenderTime;

    /**
     * @var integer DOM content loaded, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DocumentFinishTime;

    /**
     * @var integer Average TCP connection, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TcpConnectionTime;

    /**
     * @var integer Average backend response, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseTime;

    /**
     * @var integer Average DOM content download, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileDownloadTime;

    /**
     * @var integer Load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadTime;

    /**
     * @param integer $FirstContentfulPaint Last contentful paint, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FirstMeaningfulPaint Full content load, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $OverallDownloadSpeed Average download speed, in KB/s.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenderTime Rendering time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DocumentFinishTime DOM content loaded, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TcpConnectionTime Average TCP connection, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResponseTime Average backend response, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileDownloadTime Average DOM content download, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LoadTime Load time, in milliseconds.
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
        if (array_key_exists("FirstContentfulPaint",$param) and $param["FirstContentfulPaint"] !== null) {
            $this->FirstContentfulPaint = $param["FirstContentfulPaint"];
        }

        if (array_key_exists("FirstMeaningfulPaint",$param) and $param["FirstMeaningfulPaint"] !== null) {
            $this->FirstMeaningfulPaint = $param["FirstMeaningfulPaint"];
        }

        if (array_key_exists("OverallDownloadSpeed",$param) and $param["OverallDownloadSpeed"] !== null) {
            $this->OverallDownloadSpeed = $param["OverallDownloadSpeed"];
        }

        if (array_key_exists("RenderTime",$param) and $param["RenderTime"] !== null) {
            $this->RenderTime = $param["RenderTime"];
        }

        if (array_key_exists("DocumentFinishTime",$param) and $param["DocumentFinishTime"] !== null) {
            $this->DocumentFinishTime = $param["DocumentFinishTime"];
        }

        if (array_key_exists("TcpConnectionTime",$param) and $param["TcpConnectionTime"] !== null) {
            $this->TcpConnectionTime = $param["TcpConnectionTime"];
        }

        if (array_key_exists("ResponseTime",$param) and $param["ResponseTime"] !== null) {
            $this->ResponseTime = $param["ResponseTime"];
        }

        if (array_key_exists("FileDownloadTime",$param) and $param["FileDownloadTime"] !== null) {
            $this->FileDownloadTime = $param["FileDownloadTime"];
        }

        if (array_key_exists("LoadTime",$param) and $param["LoadTime"] !== null) {
            $this->LoadTime = $param["LoadTime"];
        }
    }
}
