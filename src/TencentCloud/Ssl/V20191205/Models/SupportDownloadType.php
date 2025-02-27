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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supported types for download.
 *
 * @method boolean getNGINX() Obtain Whether the available format of nginx can be downloaded.
 * @method void setNGINX(boolean $NGINX) Set Whether the available format of nginx can be downloaded.
 * @method boolean getAPACHE() Obtain Whether the available format of apache can be downloaded.
 * @method void setAPACHE(boolean $APACHE) Set Whether the available format of apache can be downloaded.
 * @method boolean getTOMCAT() Obtain Whether the available format of tomcat can be downloaded.
 * @method void setTOMCAT(boolean $TOMCAT) Set Whether the available format of tomcat can be downloaded.
 * @method boolean getIIS() Obtain Whether the available format of iis can be downloaded.
 * @method void setIIS(boolean $IIS) Set Whether the available format of iis can be downloaded.
 * @method boolean getJKS() Obtain Indicates whether the jks format can be downloaded.
 * @method void setJKS(boolean $JKS) Set Indicates whether the jks format can be downloaded.
 * @method boolean getOTHER() Obtain Indicates whether other formats can be downloaded.
 * @method void setOTHER(boolean $OTHER) Set Indicates whether other formats can be downloaded.
 * @method boolean getROOT() Obtain Indicates whether the root certificate can be downloaded.
 * @method void setROOT(boolean $ROOT) Set Indicates whether the root certificate can be downloaded.
 */
class SupportDownloadType extends AbstractModel
{
    /**
     * @var boolean Whether the available format of nginx can be downloaded.
     */
    public $NGINX;

    /**
     * @var boolean Whether the available format of apache can be downloaded.
     */
    public $APACHE;

    /**
     * @var boolean Whether the available format of tomcat can be downloaded.
     */
    public $TOMCAT;

    /**
     * @var boolean Whether the available format of iis can be downloaded.
     */
    public $IIS;

    /**
     * @var boolean Indicates whether the jks format can be downloaded.
     */
    public $JKS;

    /**
     * @var boolean Indicates whether other formats can be downloaded.
     */
    public $OTHER;

    /**
     * @var boolean Indicates whether the root certificate can be downloaded.
     */
    public $ROOT;

    /**
     * @param boolean $NGINX Whether the available format of nginx can be downloaded.
     * @param boolean $APACHE Whether the available format of apache can be downloaded.
     * @param boolean $TOMCAT Whether the available format of tomcat can be downloaded.
     * @param boolean $IIS Whether the available format of iis can be downloaded.
     * @param boolean $JKS Indicates whether the jks format can be downloaded.
     * @param boolean $OTHER Indicates whether other formats can be downloaded.
     * @param boolean $ROOT Indicates whether the root certificate can be downloaded.
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
        if (array_key_exists("NGINX",$param) and $param["NGINX"] !== null) {
            $this->NGINX = $param["NGINX"];
        }

        if (array_key_exists("APACHE",$param) and $param["APACHE"] !== null) {
            $this->APACHE = $param["APACHE"];
        }

        if (array_key_exists("TOMCAT",$param) and $param["TOMCAT"] !== null) {
            $this->TOMCAT = $param["TOMCAT"];
        }

        if (array_key_exists("IIS",$param) and $param["IIS"] !== null) {
            $this->IIS = $param["IIS"];
        }

        if (array_key_exists("JKS",$param) and $param["JKS"] !== null) {
            $this->JKS = $param["JKS"];
        }

        if (array_key_exists("OTHER",$param) and $param["OTHER"] !== null) {
            $this->OTHER = $param["OTHER"];
        }

        if (array_key_exists("ROOT",$param) and $param["ROOT"] !== null) {
            $this->ROOT = $param["ROOT"];
        }
    }
}
